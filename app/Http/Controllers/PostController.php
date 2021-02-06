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

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $insert = [
            'slug' => Str::slug($request->judul,'-'),
            'judul' => $request->judul,
            'des_singkat' => $request->des_singkat,
            'foto' => $request->foto,
            'tag' => $request->tag,
            'isi_post' => $request->isi_post,
        ];
  
        Post::insertGetId($insert);
   
        return redirect()->back();
    }

    public function show(Post $slug)
    {   


        return view('post.display', compact('slug'));
    }
}
