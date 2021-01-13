<?php

namespace App\Http\Livewire;

use App\Models\Pegawai;
use Livewire\Component;
use Livewire\WithPagination;
use App\Exports\SkCpnsExport;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\SkCpns as SkCpnsModel;
use Illuminate\Support\Facades\Storage;

class SkCpns extends Component
{
    public $nama_pns,$nip,$no_sk,$tgl_sk,$tmt_sk,$pejabat,$softfile,$skcpns_id;
    public $updateMode = false;
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $pegawai = Pegawai::where('status_ptk',"PNS")->get();
        $skcpnss= SkCpnsModel::latest()->paginate(10);
        return view('livewire.sk-cpns.index', ['skcpnss' => $skcpnss, 'pegawai' => $pegawai]);
    }

    public function previewImage()
    {
        $this->validate([
            'softfile' => 'file|max:2048'
        ]);
    }

    private function resetInputFields(){
        $this->nama_pns = '';
        $this->nip = '';
        $this->no_sk = '';
        $this->tgl_sk = '';
        $this->tmt_sk = '';
        $this->pejabat = '';
        $this->softfile = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'nama_pns' => 'required',
            'nip' => 'required',
            'no_sk' => 'required',
            'tgl_sk' => 'required',
            'tmt_sk' => 'required',
            'pejabat' => 'required',
            'softfile' => 'required',
        ]);

        $softName = md5($this->softfile.microtime().'.'.$this->softfile->extension());
        Storage::putFileAs(
            'public/SkCpns',
            $this->softfile,
            $softName
        );
        
        $pegawai = Pegawai::where('status_ptk',"PNS")->get();;

        $skcpns = new SkCpnsModel;
            $skcpns->insert([
                'nama_pns' => $this->nama_pns,
                'nip' => $this->nip,
                'no_sk' => $this->no_sk,
                'tgl_sk' => $this->tgl_sk,
                'tmt_sk' => $this->tmt_sk,
                'pejabat' => $this->pejabat,
                'softfile' => $softName,
            ]);

        session()->flash('message', 'SK CPNS berhasil di input');

        $this->resetInputFields();

        $this->emit('skcpnsStore'); // Close model to using to jquery

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $skcpns = SkCpnsModel::where('id',$id)->first();
        $pegawai = Pegawai::where('status_ptk','PNS');
        $this->skcpns_id = $id;
        $this->nama_pns = $skcpns->nama_pns;
        $this->nip = $skcpns->nip;
        $this->no_sk = $skcpns->no_sk;
        $this->tgl_sk = $skcpns->tgl_sk;
        $this->tmt_sk = $skcpns->tmt_sk; 
        $this->pejabat = $skcpns->pejabat; 
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
            'nip' => 'required',
            'no_sk' => 'required',
            'tgl_sk' => 'required',
            'tmt_sk' => 'required',
            'pejabat' => 'required',
            'softfile' => 'required',
        ]);

        $softName = md5($this->softfile.microtime().'.pdf');
        Storage::putFileAs(
            'public/SkCpns',
            $this->softfile,
            $softName
        );

        if ($this->skcpns_id) {
            $skcpns = SkCpnsModel::find($this->skcpns_id);
            $skcpns->update([
                'nama_pns' => $this->nama_pns,
                'nip' => $this->nip,
                'no_sk' => $this->no_sk,
                'tgl_sk' => $this->tgl_sk,
                'tmt_sk' => $this->tmt_sk,
                'pejabat' => $this->pejabat,
                'softfile' => $softName,
            ]);
            $this->updateMode = false;
            $this->emit('skcpnsUpdate'); // Close model to using to jquery
            session()->flash('message', 'SK CPNS berhasil di Update');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if($id){
            SkCpnsModel::where('id',$id)->delete();
            session()->flash('message', 'SK CPNS berhasil di Hapus!');
        }
    }

    public function export() 
    {
        return Excel::download(new SkCpnsExport, 'SK CPNS.xlsx');
    }
}
