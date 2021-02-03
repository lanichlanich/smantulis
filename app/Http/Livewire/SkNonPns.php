<?php

namespace App\Http\Livewire;

use App\Models\Pegawai;
use Livewire\Component;
use Livewire\WithPagination;
use App\Exports\SkNonPnsExport;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\SkNonPns as SkNonPnsModel;
use Illuminate\Support\Facades\Storage;

class SkNonPns extends Component
{
    public $nama_non_pns,$no_sk,$tgl_sk,$tmt_sk,$softfile,$sknonpns_id;
    public $updateMode = false;
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $pegawai = Pegawai::where('status_ptk',"NON PNS")->get();
        $sknonpnss= SkNonPnsModel::latest()->paginate(10);
        return view('livewire.sk-non-pns.index', ['sknonpnss' => $sknonpnss, 'pegawai' => $pegawai]);
    }

    public function previewImage()
    {
        $this->validate([
            'softfile' => 'file|max:2048'
        ]);
    }

    private function resetInputFields(){
        $this->nama_non_pns = '';
        $this->no_sk = '';
        $this->tgl_sk = '';
        $this->tmt_sk = '';
        $this->softfile = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'nama_non_pns' => 'required',
            'no_sk' => 'required',
            'tgl_sk' => 'required',
            'tmt_sk' => 'required',
            'softfile' => 'required',
        ]);

        $softName = md5($this->softfile.microtime().'.'.$this->softfile->extension());
        Storage::putFileAs(
            'public/SkNonPns',
            $this->softfile,
            $softName
        );
        
        $pegawai = Pegawai::where('status_ptk',"NON PNS")->get();;

        $skcpns = new SkNonPnsModel;
            $skcpns->insert([
                'nama_non_pns' => $this->nama_non_pns,
                'no_sk' => $this->no_sk,
                'tgl_sk' => $this->tgl_sk,
                'tmt_sk' => $this->tmt_sk,
                'softfile' => $softName,
            ]);

        session()->flash('message', 'SK NON PNS berhasil di input');

        $this->resetInputFields();

        $this->emit('sknonpnsStore'); // Close model to using to jquery

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $sknonpns = SkNonPnsModel::where('id',$id)->first();
        $pegawai = Pegawai::where('status_ptk','NON PNS');
        $this->sknonpns_id = $id;
        $this->nama_non_pns = $sknonpns->nama_non_pns;
        $this->no_sk = $sknonpns->no_sk;
        $this->tgl_sk = $sknonpns->tgl_sk;
        $this->tmt_sk = $sknonpns->tmt_sk; 
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
            'nama_non_pns' => 'required',
            'no_sk' => 'required',
            'tgl_sk' => 'required',
            'tmt_sk' => 'required',
            'softfile' => 'required',
        ]);

        $softName = md5($this->softfile.microtime().'.pdf');
        Storage::putFileAs(
            'public/SkNonPns',
            $this->softfile,
            $softName
        );

        if ($this->sknonpns_id) {
            $sknonpns = SkNonPnsModel::find($this->sknonpns_id);
            $sknonpns->update([
                'nama_non_pns' => $this->nama_non_pns,
                'no_sk' => $this->no_sk,
                'tgl_sk' => $this->tgl_sk,
                'tmt_sk' => $this->tmt_sk,
                'softfile' => $softName,
            ]);
            $this->updateMode = false;
            $this->emit('sknonpnsUpdate'); // Close model to using to jquery
            session()->flash('message', 'SK NON PNS berhasil di Update');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if($id){
            SkNonPnsModel::where('id',$id)->delete();
            session()->flash('message', 'SK NON PNS berhasil di Hapus!');
        }
    }

    public function export() 
    {
        return Excel::download(new SkNonPnsExport, 'SK NON PNS.xlsx');
    }
}
