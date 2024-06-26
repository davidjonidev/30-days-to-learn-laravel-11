<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index', [
            'posts' => Post::with('tags')->simplePaginate(10)
        ]);
    }

    public function show(Post $post)
    {
        return view('blog.show', ['post' => $post]);
    }
}
