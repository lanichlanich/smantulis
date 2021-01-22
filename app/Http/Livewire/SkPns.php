<?php

namespace App\Http\Livewire;

use App\Models\Pegawai;
use Livewire\Component;
use Livewire\WithPagination;
use App\Exports\SkPnsExport;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\SkPns as SkPnsModel;
use Illuminate\Support\Facades\Storage;

class SkPns extends Component
{
    public $nama_pns,$no_sk,$tgl_sk,$tmt_sk,$golongan,$masa_kerja,$gaji_pokok,$angka_kredit,$pejabat,$softfile,$skpns_id;
    public $updateMode = false;
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $pegawai = Pegawai::where('status_ptk',"PNS")->get();
        $skpnss= SkPnsModel::latest()->paginate(10);
        return view('livewire.sk-pns.index', ['skpnss' => $skpnss, 'pegawai' => $pegawai]);
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
        $this->golongan = '';
        $this->masa_kerja = '';
        $this->gaji_pokok = '';
        $this->angka_kredit = '';
        $this->pejabat = '';
        $this->softfile = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'nama_pns' => 'required',
            'no_sk' => 'required',
            'tgl_sk' => 'required',
            'tmt_sk' => 'required',
            'golongan'=> 'required',
            'masa_kerja'=> 'required',
            'gaji_pokok'=> 'required',
            'angka_kredit'=> 'required',
            'pejabat' => 'required',
            'softfile' => 'required',
        ]);

        $softName = md5($this->softfile.microtime().'.'.$this->softfile->extension());
        Storage::putFileAs(
            'public/SkPns',
            $this->softfile,
            $softName
        );
        
        $pegawai = Pegawai::where('status_ptk',"PNS")->get();;

        $skcpns = new SkPnsModel;
            $skcpns->insert([
                'nama_pns' => $this->nama_pns,
                'no_sk' => $this->no_sk,
                'tgl_sk' => $this->tgl_sk,
                'tmt_sk' => $this->tmt_sk,
                'golongan' => $this->golongan,
                'masa_kerja' => $this->masa_kerja,
                'gaji_pokok' => $this->gaji_pokok,
                'angka_kredit' => $this->angka_kredit,
                'pejabat' => $this->pejabat,
                'softfile' => $softName,
            ]);

        session()->flash('message', 'SK PNS berhasil di input');

        $this->resetInputFields();

        $this->emit('skpnsStore'); // Close model to using to jquery

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $skpns = SkPnsModel::where('id',$id)->first();
        $pegawai = Pegawai::where('status_ptk','PNS');
        $this->skcpns_id = $id;
        $this->nama_pns = $skpns->nama_pns;
        $this->no_sk = $skpns->no_sk;
        $this->tgl_sk = $skpns->tgl_sk;
        $this->tmt_sk = $skpns->tmt_sk; 
        $this->golongan = $skpns->golongan;
        $this->masa_kerja = $skpns->masa_kerja;
        $this->gaji_pokok = $skpns->gaji_pokok;
        $this->angka_kredit = $skpns->angka_kredit;
        $this->pejabat = $skpns->pejabat; 
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
            'golongan'=> 'required',
            'masa_kerja'=> 'required',
            'gaji_pokok'=> 'required',
            'angka_kredit'=> 'required',
            'pejabat' => 'required',
            'softfile' => 'required',
        ]);

        $softName = md5($this->softfile.microtime().'.pdf');
        Storage::putFileAs(
            'public/SkPns',
            $this->softfile,
            $softName
        );

        if ($this->skcpns_id) {
            $skpns = SkPnsModel::find($this->skpns_id);
            $skpns->update([
                'nama_pns' => $this->nama_pns,
                'no_sk' => $this->no_sk,
                'tgl_sk' => $this->tgl_sk,
                'tmt_sk' => $this->tmt_sk,
                'golongan' => $this->golongan,
                'masa_kerja' => $this->masa_kerja,
                'gaji_pokok' => $this->gaji_pokok,
                'angka_kredit' => $this->angka_kredit,
                'pejabat' => $this->pejabat,
                'softfile' => $softName,
            ]);
            $this->updateMode = false;
            $this->emit('skpnsUpdate'); // Close model to using to jquery
            session()->flash('message', 'SK PNS berhasil di Update');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if($id){
            SkPnsModel::where('id',$id)->delete();
            session()->flash('message', 'SK PNS berhasil di Hapus!');
        }
    }

    public function export() 
    {
        return Excel::download(new SkPnsExport, 'SK PNS.xlsx');
    }
}
