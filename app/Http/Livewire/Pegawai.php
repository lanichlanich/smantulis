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
    public              
        $nama,
        $jk,
        $nip,
        $nuptk,
        $tpt_lahir,
        $tgl_lahir,
        $ibu,
        $jenis_ptk,
        $status_ptk,
        $foto,
        $nik,
        $kk,
        $alamat,
        $suami_istri,
        $anak1,
        $anak2,
        $anak3,
        $karpeg,
        $bpjs,
        $npwp,

        $pegawai_id;
            
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
        $this->nama = '';
        $this->jk = '';
        $this->nip = '';
        $this->nuptk = '';
        $this->tpt_lahir = '';
        $this->tgl_lahir = '';
        $this->ibu = '';
        $this->jenis_ptk = '';
        $this->status_ptk = '';
        $this->foto = '';
        $this->nik = '';
        $this->kk = '';
        $this->alamat = '';
        $this->suami_istri = '';
        $this->anak1 = '';
        $this->anak2 = '';
        $this->anak3 = '';
        $this->karpeg = '';
        $this->bpjs = '';
        $this->npwp = '';
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
                'nama' => $this->nama,
                'jk' => $this->jk,
                'nip' => $this->nip,
                'nuptk' => $this->nuptk,
                'tpt_lahir' => $this->tpt_lahir,
                'tgl_lahir' => $this->tgl_lahir,
                'ibu' => $this->ibu,
                'jenis_ptk' => $this->jenis_ptk,
                'status_ptk' => $this->status_ptk,
                'foto' => $softName,
                'nik' => $this->nik,
                'kk' => $this->kk,
                'alamat' => $this->alamat,
                'suami_istri' => $this->suami_istri,
                'anak1' => $this->anak1,
                'anak2' => $this->anak2,
                'anak3' => $this->anak3,
                'karpeg' => $this->karpeg,
                'bpjs' => $this->bpjs,
                'npwp' => $this->npwp,
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

        $this->nama = $pegawai->nama;
        $this->nip = $pegawai->nip;
        $this->nuptk = $pegawai->nuptk;
        $this->tpt_lahir = $pegawai->tpt_lahir;
        $this->tgl_lahir = $pegawai->tgl_lahir;
        $this->ibu = $pegawai->ibu;
        $this->jenis_ptk = $pegawai->jenis_ptk;
        $this->status_ptk = $pegawai->status_ptk;
        $this->foto = '';
        $this->nik = $pegawai->nik;
        $this->kk = $pegawai->kk;
        $this->alamat = $pegawai->alamat;
        $this->suami_istri = $pegawai->suami_istri;
        $this->anak1 = $pegawai->anak1;
        $this->anak2 = $pegawai->anak2;
        $this->anak3 = $pegawai->anak3;
        $this->karpeg = $pegawai->karpeg;
        $this->bpjs = $pegawai->bpjs;
        $this->npwp = $pegawai->npwp;
        
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
                'nama' => $this->nama,
                'jk' => $this->jk,
                'nip' => $this->nip,
                'nuptk' => $this->nuptk,
                'tpt_lahir' => $this->tpt_lahir,
                'tgl_lahir' => $this->tgl_lahir,
                'ibu' => $this->ibu,
                'jenis_ptk' => $this->jenis_ptk,
                'status_ptk' => $this->status_ptk,
                'foto' => $softName,
                'nik' => $this->nik,
                'kk' => $this->kk,
                'alamat' => $this->alamat,
                'suami_istri' => $this->suami_istri,
                'anak1' => $this->anak1,
                'anak2' => $this->anak2,
                'anak3' => $this->anak3,
                'karpeg' => $this->karpeg,
                'bpjs' => $this->bpjs,
                'npwp' => $this->npwp,
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
