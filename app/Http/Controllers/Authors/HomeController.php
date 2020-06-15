<?php

namespace App\Http\Controllers\Authors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalpostapproved = Post::where('active',1)->count();
        $totalpostnotapproved = Post::where('active',0)->count();
        $totaluser = User::count();
        $totalcategory = Category::count();

        return view('Authors.dashboard')->with([
            'totalpostapproved'=> $totalpostapproved,
            'totalpostnotapproved' => $totalpostnotapproved,
            'totaluser' => $totaluser,
            'totalcategory' => $totalcategory
            ]);
    }
}
