<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $topview = Post::where('active',1)->orderBy('page_views', 'DESC')->take(5)->get();
        $data = Post::where('active',1)->with('Category','Author')->latest()->get();

        return view('home')->with(['data' => $data, 'topview' => $topview]);;
    }
}
