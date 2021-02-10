<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts= Post::latest()->paginate(10);
        return view('post.index', ['posts' => $posts]);
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
   
        return redirect()->back();
    }

    public function show(Post $slug)
    {   


        return view('display', compact('slug'));
    }
}
