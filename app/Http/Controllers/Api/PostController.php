<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends BaseApiController
{
    public function index()
    {
        $posts = Post::where('active',1)->latest()->get();

        return $this->sendResponse($posts->toArray(), 'posts retrieved successfully.');
    }
    public function byCategory($id)
    {
        $posts = Post::where('active',1)->where('category_id',$id)->latest()->get();

        return $this->sendResponse($posts->toArray(), 'posts retrieved successfully.');
    }
    public function topViews()
    {
        $posts = Post::where('active',1)->orderBy('page_views', 'DESC')->take(5)->get();

        return $this->sendResponse($posts->toArray(), 'posts retrieved successfully.');
    }
    public function byAuthor($id)
    {
        $posts = Post::where('active',1)->where('author_id',$id)->latest()->get();

        return $this->sendResponse($posts->toArray(), 'posts retrieved successfully.');
    }
    public function searchPost($title)
    {
        $posts = Post::where('active',1)->where('title','LIKE', '%$title%')->latest()->get();

        return $this->sendResponse($posts->toArray(), 'posts retrieved successfully.');
    }
    public function category()
    {
        $categories = Category::all();
        return $categories;
        // return $this->sendResponse($categories->toArray(), 'posts retrieved successfully.');
    }
    public function show($slug)
    {
        $posts = Post::where('slug',$slug)->first();
        if (is_null($posts)) {
            return $this->sendError('posts not found.');
        }
        $posts->increment('page_views', 1);

        return $this->sendResponse($posts, 'posts retrieved successfully.');
    }
}
