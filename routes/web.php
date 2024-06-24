<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Post;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog', function () {
    return view('blog', [
        'posts' => Post::all()
    ]);
});

Route::get('/blog/{id}', function ($id) {
    $post = Post::find($id);
    return view('single/blog', ['post' => $post]);
});
