<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts= Post::latest()->paginate(5);
        return view('post.index', ['posts' => $posts]);
        // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function previewImage()
    {
        $this->validate([
            'foto' => 'image|max:2048'
        ]);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'des_singkat' => 'required',
            //'foto' => 'required',
            'tag' => 'required',
            'file' => 'required',
        ]);

        if ($request->hasFile('file')) {
            
            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);
            // Save the file locally in the storage/public/ folder under a new folder named /post
            $request->file->store('post', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $post = new Post([
                'slug' => Str::slug($request->judul,'-'),
                'judul' => $request->judul,
                'des_singkat' => $request->des_singkat,
                'foto' => $request->file->hashName(),
                'tag' => $request->tag,
                'isi_post' => $request->isi_post,
            ]);
            $post->save(); // Finally, save the record.
        }
   
        return redirect('posts')->withInput();
    }

    public function show(Post $slug)
    {   
        return view('display', compact('slug'));
    }

    public function edit(Request $post)
    {
        $post = Post::where('id',$post->id)->first();
        return view('post.edit', ['post' => $post]);
    }
 
    public function update(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'des_singkat' => 'required',
            'foto' => 'required',
            'tag' => 'required',
            'file' => 'required',
        ]);

        if ($request->hasFile('file')) {
            
            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);
            // Save the file locally in the storage/public/ folder under a new folder named /post
            $request->file->store('post', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $post = new Post([
                'slug' => Str::slug($request->judul,'-'),
                'judul' => $request->judul,
                'des_singkat' => $request->des_singkat,
                'foto' => $request->file->hashName(),
                'tag' => $request->tag,
                'isi_post' => $request->isi_post,
            ]);

            $post->update($request->all());
        }
   
        return redirect('edit')->withInput();
    }

    // public function destroy(Post $id)
    // {
        
    //     $post = DB::table('posts')->where('id',$id)->delete();
    
       

    //     if($post){
    //         //redirect dengan pesan sukses
    //         return redirect()->route('posts')->with(['success' => 'Data Berhasil Dihapus!']);
    //     }else{
    //         //redirect dengan pesan error
    //         return redirect()->route('posts')->with(['error' => 'Data Gagal Dihapus!']);
    //     }
    // }
}
