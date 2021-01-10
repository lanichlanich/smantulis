<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\SuratOut as SuratModel;
use Illuminate\Support\Facades\Storage;
use App\Exports\SuratOutExport;
use Maatwebsite\Excel\Facades\Excel;

class SuratOut extends Component
{
    public $no_surat, $tgl_surat, $perihal, $tujuan, $keterangan, $softfile, $srtout_id;
    public $updateMode = false;
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $suratouts= SuratModel::latest()->paginate(10);
        return view('livewire.surat-out.index', ['suratouts' => $suratouts]);
    }

    public function previewImage()
    {
        $this->validate([
            'softfile' => 'file|max:2048'
        ]);
    }

    private function resetInputFields(){
        $this->no_surat = '';
        $this->tgl_surat = '';
        $this->perihal = '';
        $this->tujuan = '';
        $this->keterangan = '';
        $this->softfile = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'no_surat' => 'required',
            'tgl_surat' => 'required',
            'perihal' => 'required',
            'tujuan' => 'required',
            'keterangan' => 'required',
            'softfile' => 'required',
        ]);

        $softName = md5($this->softfile.microtime().'.'.$this->softfile->extension());
        Storage::putFileAs(
            'public/SuratKeluar',
            $this->softfile,
            $softName
        );
        
        $suratout = new SuratModel;
            $suratout->insert([
                'no_surat' => $this->no_surat,
                'tgl_surat' => $this->tgl_surat,
                'perihal' => $this->perihal,
                'tujuan' => $this->tujuan,
                'keterangan' => $this->keterangan,
                'softfile' => $softName,
            ]);

        session()->flash('message', 'Surat Keluar berhasil di input');

        $this->resetInputFields();

        $this->emit('suratoutStore'); // Close model to using to jquery

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $suratout = SuratModel::where('id',$id)->first();
        $this->srtout_id = $id;
        $this->no_surat = $suratout->no_surat;
        $this->tgl_surat = $suratout->tgl_surat;
        $this->perihal = $suratout->perihal;
        $this->tujuan = $suratout->tujuan;
        $this->keterangan = $suratout->keterangan;
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
            'perihal' => 'required',
            'tujuan' => 'required',
            'keterangan' => 'required',
            'softfile' => 'required',
        ]);

        $softName = md5($this->softfile.microtime().'.pdf');
        Storage::putFileAs(
            'public/SuratKeluar',
            $this->softfile,
            $softName
        );

        if ($this->srtout_id) {
            $srtout = SuratModel::find($this->srtout_id);
            $srtout->update([
                'no_surat' => $this->no_surat,
                'tgl_surat' => $this->tgl_surat,
                'perihal' => $this->perihal,
                'tujuan' => $this->tujuan,
                'keterangan' => $this->keterangan,
                'softfile' => $softName,
            ]);
            $this->updateMode = false;
            $this->emit('suratoutUpdate'); // Close model to using to jquery
            session()->flash('message', 'Surat Keluar berhasil di Update');

            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if($id){
            SuratModel::where('id',$id)->delete();
            session()->flash('message', 'Surat Keluar berhasil di Hapus!');
        }
    }

    public function export() 
    {
        return Excel::download(new SuratOutExport, 'Surat Keluar.xlsx');
    }
}
