<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Sunra\PhpSimple\HtmlDomParser;

class LandingController extends Controller
{
    public function index()
    {
        $posts= Post::latest()->paginate(6);
        return view('welcome', ['posts' => $posts]);
    }
}
