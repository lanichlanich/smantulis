<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Exports\PageExport;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Page as PageModel;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class Page extends Component
{
    public $foto, $judul, $slug, $isi_post, $page_id;
    use WithPagination;
    use WithFileUploads;
    public $updateMode = false;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $pages= PageModel::latest()->paginate(10);
        return view('livewire.page.index', ['pages' => $pages]);
    }

    public function previewImage()
    {
        $this->validate([
            'foto' => 'image|max:2048'
        ]);
    }

    private function resetInputFields(){
        $this->foto = '';
        $this->judul = '';
        $this->isi_post = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'foto' => 'required',
            'judul' => 'required',
            'isi_post' => 'required',
        ]);

        $softName = md5($this->foto.microtime().'.'.$this->foto->extension());
        Storage::putFileAs(
            'public/Page',
            $this->foto,
            $softName
        );
        
        $page = new PageModel;
            $page->insert([
                'foto' => $softName,
                'judul' => $this->judul,
                'slug' => Str::slug($this->judul,'-'),
                'isi_post' => $this->isi_post,
            ]);

        session()->flash('message', 'Page berhasil di input');

        $this->resetInputFields();

        $this->emit('pageStore'); // Close model to using to jquery
        return redirect('/page');

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $page = PageModel::where('id',$id)->first();
        $this->page_id = $id;
        $this->foto = '';
        $this->judul = $page->judul;
        $this->slug = Str::slug($page->judul,'-');
        $this->isi_post = $page->isi_post;
        
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
            'judul' => 'required',
            'isi_post' => 'required',
        ]);

        $softName = md5($this->foto.microtime().'.pdf');
        Storage::putFileAs(
            'public/Page',
            $this->foto,
            $softName
        );

        if ($this->page_id) {
            $page = PageModel::find($this->page_id);
            $page->update([
                'foto' => $softName,
                'judul' => $this->judul,
                'slug' => Str::slug($this->judul,'-'),
                'isi_post' => $this->isi_post,
            ]);
            $this->updateMode = false;
            $this->emit('pageUpdate'); // Close model to using to jquery
            session()->flash('message', 'Page berhasil di Update');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if($id){
            PageModel::where('id',$id)->delete();
            session()->flash('message', 'Page berhasil di Hapus!');
        }
    }

    public function export() 
    {
        return Excel::download(new PageExport, 'Daftar Page.xlsx');
    }
}
