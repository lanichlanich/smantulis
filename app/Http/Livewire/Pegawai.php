<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Pegawai as PegawaiModel;
use Illuminate\Support\Facades\Storage;
use App\Exports\PegawaiExport;
use Maatwebsite\Excel\Facades\Excel;

class Pegawai extends Component
{
    public $foto, $nama, $jk, $nik, $tgl_lahir, $tpt_lahir, $nip, $nuptk, $jenis_ptk, $status_ptk, $pegawai_id;
    use WithPagination;
    use WithFileUploads;
    public $updateMode = false;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $pegawais= PegawaiModel::latest()->paginate(10);
        return view('livewire.pegawai.index', ['pegawais' => $pegawais]);
    }

    public function previewImage()
    {
        $this->validate([
            'foto' => 'image|max:2048'
        ]);
    }

    private function resetInputFields(){
        $this->foto = '';
        $this->nama = '';
        $this->jk = '';
        $this->nik = '';
        $this->tgl_lahir = '';
        $this->tpt_lahir = '';
        $this->nip = '';
        $this->nuptk = '';
        $this->jenis_ptk = '';
        $this->status_ptk = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'foto' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'nik' => 'required',
            'tgl_lahir' => 'required',
            'tpt_lahir' => 'required',
            'jenis_ptk' => 'required',
            'status_ptk' => 'required',
        ]);

        $softName = md5($this->foto.microtime().'.'.$this->foto->extension());
        Storage::putFileAs(
            'public/Pegawai',
            $this->foto,
            $softName
        );
        
        $pegawai = new PegawaiModel;
            $pegawai->insert([
                'foto' => $softName,
                'nama' => $this->nama,
                'jk' => $this->jk,
                'nik' => $this->nik,
                'tgl_lahir' => $this->tgl_lahir,
                'tpt_lahir' => $this->tpt_lahir,
                'nip' => $this->nip,
                'nuptk' => $this->nuptk,
                'jenis_ptk' => $this->jenis_ptk,
                'status_ptk' => $this->status_ptk,
            ]);

        session()->flash('message', 'PTK berhasil di input');

        $this->resetInputFields();

        $this->emit('pegawaiStore'); // Close model to using to jquery

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $pegawai = PegawaiModel::where('id',$id)->first();
        $this->pegawai_id = $id;
        $this->foto = '';
        $this->nama = $pegawai->nama;
        $this->jk = $pegawai->jk;
        $this->nik = $pegawai->nik;
        $this->tgl_lahir = $pegawai->tgl_lahir;
        $this->tpt_lahir = $pegawai->tpt_lahir;
        $this->nip = $pegawai->nip;
        $this->nuptk = $pegawai->nuptk;
        $this->jenis_ptk = $pegawai->jenis_ptk;
        $this->status_ptk = $pegawai->status_ptk;
        
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }

    public function update()
    {
        $validatedDate = $this->validate([
            'foto' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'nik' => 'required',
            'tgl_lahir' => 'required',
            'tpt_lahir' => 'required',
            'jenis_ptk' => 'required',
            'status_ptk' => 'required',
        ]);

        $softName = md5($this->foto.microtime().'.pdf');
        Storage::putFileAs(
            'public/Pegawai',
            $this->foto,
            $softName
        );

        if ($this->pegawai_id) {
            $pegawai = PegawaiModel::find($this->pegawai_id);
            $pegawai->update([
                'foto' => $softName,
                'nama' => $this->nama,
                'jk' => $this->jk,
                'nik' => $this->nik,
                'tgl_lahir' => $this->tgl_lahir,
                'tpt_lahir' => $this->tpt_lahir,
                'nip' => $this->nip,
                'nuptk' => $this->nuptk,
                'jenis_ptk' => $this->jenis_ptk,
                'status_ptk' => $this->status_ptk,
            ]);
            $this->updateMode = false;
            $this->emit('pegawaiUpdate'); // Close model to using to jquery
            session()->flash('message', 'PTK berhasil di Update');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if($id){
            PegawaiModel::where('id',$id)->delete();
            session()->flash('message', 'PTK berhasil di Hapus!');
        }
    }

    public function export() 
    {
        return Excel::download(new PegawaiExport, 'Daftar PTK.xlsx');
    }
}
