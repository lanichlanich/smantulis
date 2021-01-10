<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\SuratIn as SuratModel;
use Illuminate\Support\Facades\Storage;
use App\Exports\SuratInExport;
use Maatwebsite\Excel\Facades\Excel;

class SuratIn extends Component
{
    public $no_surat, $tgl_surat, $perihal, $pengirim, $keterangan, $softfile, $srtin_id;
    public $updateMode = false;
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $suratins= SuratModel::latest()->paginate(10);
        return view('livewire.surat-in.index', ['suratins' => $suratins]);
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
        $this->pengirim = '';
        $this->keterangan = '';
        $this->softfile = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'no_surat' => 'required',
            'tgl_surat' => 'required',
            'perihal' => 'required',
            'pengirim' => 'required',
            'keterangan' => 'required',
            'softfile' => 'required',
        ]);

        $softName = md5($this->softfile.microtime().'.'.$this->softfile->extension());
        Storage::putFileAs(
            'public/SuratMasuk',
            $this->softfile,
            $softName
        );
        
        $suratin = new SuratModel;
            $suratin->insert([
                'no_surat' => $this->no_surat,
                'tgl_surat' => $this->tgl_surat,
                'perihal' => $this->perihal,
                'pengirim' => $this->pengirim,
                'keterangan' => $this->keterangan,
                'softfile' => $softName,
            ]);

        session()->flash('message', 'Surat Masuk berhasil di input');

        $this->resetInputFields();

        $this->emit('suratinStore'); // Close model to using to jquery

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $suratin = SuratModel::where('id',$id)->first();
        $this->srtin_id = $id;
        $this->no_surat = $suratin->no_surat;
        $this->tgl_surat = $suratin->tgl_surat;
        $this->perihal = $suratin->perihal;
        $this->pengirim = $suratin->pengirim;
        $this->keterangan = $suratin->keterangan;
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
            'pengirim' => 'required',
            'keterangan' => 'required',
            'softfile' => 'required',
        ]);

        $softName = md5($this->softfile.microtime().'.pdf');
        Storage::putFileAs(
            'public/SuratMasuk',
            $this->softfile,
            $softName
        );

        if ($this->srtin_id) {
            $srtin = SuratModel::find($this->srtin_id);
            $srtin->update([
                'no_surat' => $this->no_surat,
                'tgl_surat' => $this->tgl_surat,
                'perihal' => $this->perihal,
                'pengirim' => $this->pengirim,
                'keterangan' => $this->keterangan,
                'softfile' => $softName,
            ]);
            $this->updateMode = false;
            $this->emit('suratinUpdate'); // Close model to using to jquery
            session()->flash('message', 'Surat Masuk berhasil di Update');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if($id){
            SuratModel::where('id',$id)->delete();
            session()->flash('message', 'Surat Masuk berhasil di Hapus!');
        }
    }

    public function export() 
    {
        return Excel::download(new SuratInExport, 'Surat Masuk.xlsx');
    }
}
