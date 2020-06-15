<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function show($slug)
    {
        $data = Post::with('Category','Author')->where('slug',$slug)->first();

        return view('post')->with(['data' => $data]);
    }
}
