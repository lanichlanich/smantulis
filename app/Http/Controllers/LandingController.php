<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $posts= Post::latest()->paginate(6);
        return view('welcome', ['posts' => $posts]);
    }
}
