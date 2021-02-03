<?php

namespace App\Http\Livewire;

use App\Models\Pegawai;
use Livewire\Component;
use Livewire\WithPagination;
use App\Exports\SkKgbExport;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\SkKgb as SkKgbModel;
use Illuminate\Support\Facades\Storage;

class SkKgb extends Component
{
    public $nama_pns,$no_sk,$tgl_sk,$tmt_sk,$kgb_yad,$golongan,$masa_kerja,$gaji_pokok,$softfile,$skkgb_id;
    public $updateMode = false;
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $pegawai = Pegawai::where('status_ptk',"PNS")->get();
        $skkgbs= SkKgbModel::latest()->paginate(10);
        return view('livewire.sk-kgb.index', ['skkgbs' => $skkgbs, 'pegawai' => $pegawai]);
    }

    public function previewImage()
    {
        $this->validate([
            'softfile' => 'file|max:2048'
        ]);
    }

    private function resetInputFields(){
        $this->nama_pns = '';
        $this->no_sk = '';
        $this->tgl_sk = '';
        $this->tmt_sk = '';
        $this->kgb_yad = '';
        $this->golongan = '';
        $this->masa_kerja = '';
        $this->gaji_pokok = '';
        $this->softfile = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'nama_pns' => 'required',
            'no_sk' => 'required',
            'tgl_sk' => 'required',
            'tmt_sk' => 'required',
            'kgb_yad' => 'required',
            'golongan'=> 'required',
            'masa_kerja'=> 'required',
            'gaji_pokok'=> 'required',
            'softfile' => 'required',
        ]);

        $softName = md5($this->softfile.microtime().'.'.$this->softfile->extension());
        Storage::putFileAs(
            'public/SkKgb',
            $this->softfile,
            $softName
        );
        
        $pegawai = Pegawai::where('status_ptk',"PNS")->get();;

        $skkgbs = new SkKgbModel;
            $skkgbs->insert([
                'nama_pns' => $this->nama_pns,
                'no_sk' => $this->no_sk,
                'tgl_sk' => $this->tgl_sk,
                'tmt_sk' => $this->tmt_sk,
                'kgb_yad' => $this->kgb_yad,
                'golongan' => $this->golongan,
                'masa_kerja' => $this->masa_kerja,
                'gaji_pokok' => $this->gaji_pokok,
                'softfile' => $softName,
            ]);

        session()->flash('message', 'SK KGB berhasil di input');

        $this->resetInputFields();

        $this->emit('skkgbStore'); // Close model to using to jquery

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $skkgb = SkKgbModel::where('id',$id)->first();
        $pegawai = Pegawai::where('status_ptk','PNS');
        $this->skkgb_id = $id;
        $this->nama_pns = $skkgb->nama_pns;
        $this->no_sk = $skkgb->no_sk;
        $this->tgl_sk = $skkgb->tgl_sk;
        $this->tmt_sk = $skkgb->tmt_sk; 
        $this->kgb_yad = $skkgb->kgb_yad; 
        $this->golongan = $skkgb->golongan;
        $this->masa_kerja = $skkgb->masa_kerja;
        $this->gaji_pokok = $skkgb->gaji_pokok;
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
            'nama_pns' => 'required',
            'no_sk' => 'required',
            'tgl_sk' => 'required',
            'tmt_sk' => 'required',
            'kgb_yad' => 'required',
            'golongan'=> 'required',
            'masa_kerja'=> 'required',
            'gaji_pokok'=> 'required',
            'softfile' => 'required',
        ]);

        $softName = md5($this->softfile.microtime().'.pdf');
        Storage::putFileAs(
            'public/SkKgb',
            $this->softfile,
            $softName
        );

        if ($this->skkgb_id) {
            $skkgb = SkKgbModel::find($this->skkgb_id);
            $skkgb->update([
                'nama_pns' => $this->nama_pns,
                'no_sk' => $this->no_sk,
                'tgl_sk' => $this->tgl_sk,
                'tmt_sk' => $this->tmt_sk,
                'kgb_yad' => $this->kgb_yad,
                'golongan' => $this->golongan,
                'masa_kerja' => $this->masa_kerja,
                'gaji_pokok' => $this->gaji_pokok,
                'softfile' => $softName,
            ]);
            $this->updateMode = false;
            $this->emit('skkgbUpdate'); // Close model to using to jquery
            session()->flash('message', 'SK KGB berhasil di Update');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if($id){
            SkKgbModel::where('id',$id)->delete();
            session()->flash('message', 'SK KGB berhasil di Hapus!');
        }
    }

    public function export() 
    {
        return Excel::download(new SkKgbExport, 'SK KGB.xlsx');
    }
}
