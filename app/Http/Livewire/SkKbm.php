<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\SkKbm as SkKbmModel;
use Illuminate\Support\Facades\Storage;
use App\Exports\SkKbmExport;
use Maatwebsite\Excel\Facades\Excel;

class SkKbm extends Component
{
    public $no_surat, $tgl_surat, $tapel, $semester, $keterangan, $softfile, $skbm_id;
    public $updateMode = false;
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $skkbms= SkKbmModel::latest()->paginate(10);
        return view('livewire.sk-kbm.index', ['skkbms' => $skkbms]);
    }

    public function previewImage()
    {
        $this->validate([
            'softfile' => 'file|max:12048'
        ]);
    }

    private function resetInputFields(){
        $this->no_surat = '';
        $this->tgl_surat = '';
        $this->tapel = '';
        $this->semester = '';
        $this->keterangan = '';
        $this->softfile = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'no_surat' => 'required',
            'tgl_surat' => 'required',
            'tapel' => 'required',
            'semester' => 'required',
            'keterangan' => 'required',
            'softfile' => 'required',
        ]);

        $softName = md5($this->softfile.microtime().'.'.$this->softfile->extension());
        Storage::putFileAs(
            'public/SkKbm',
            $this->softfile,
            $softName
        );
        
        $skkbm = new SkKbmModel;
            $skkbm->insert([
                'no_surat' => $this->no_surat,
                'tgl_surat' => $this->tgl_surat,
                'tapel' => $this->tapel,
                'semester' => $this->semester,
                'keterangan' => $this->keterangan,
                'softfile' => $softName,
            ]);

        session()->flash('message', 'SK KBM / TU berhasil di input');

        $this->resetInputFields();

        $this->emit('skkbmStore'); // Close model to using to jquery

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $skkbm = SkKbmModel::where('id',$id)->first();
        $this->skbm_id = $id;
        $this->no_surat = $skkbm->no_surat;
        $this->tgl_surat = $skkbm->tgl_surat;
        $this->tapel = $skkbm->tapel;
        $this->semester = $skkbm->semester;
        $this->keterangan = $skkbm->keterangan;
        $this->softfile = '';
        
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }

    public function update()
    {
        $validatedDate = $this->validate([
            'no_surat' => 'required',
            'tgl_surat' => 'required',
            'tapel' => 'required',
            'semester' => 'required',
            'keterangan' => 'required',
            'softfile' => 'required',
        ]);

        $softName = md5($this->softfile.microtime().'.pdf');
        Storage::putFileAs(
            'public/SkKbm',
            $this->softfile,
            $softName
        );

        if ($this->skbm_id) {
            $skkbm = SkKbmModel::find($this->skbm_id);
            $skkbm->update([
                'no_surat' => $this->no_surat,
                'tgl_surat' => $this->tgl_surat,
                'tapel' => $this->tapel,
                'semester' => $this->semester,
                'keterangan' => $this->keterangan,
                'softfile' => $softName,
            ]);
            $this->updateMode = false;
            $this->emit('skkbmUpdate'); // Close model to using to jquery
            session()->flash('message', 'SK KBM / TU berhasil di Update');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if($id){
            SkKbmModel::where('id',$id)->delete();
            session()->flash('message', 'SK KBM / TU berhasil di Hapus!');
        }
    }

    public function export() 
    {
        return Excel::download(new SkKbmExport, 'SK KBM - TU.xlsx');
    }
}
