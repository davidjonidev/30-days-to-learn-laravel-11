<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;
// use App\Models\Job;
use App\Models\Post;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);

Route::controller(BlogController::class)->group(function () {
    Route::get('/blog', 'index');
    Route::get('/blog/{post}', 'show');
});

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);

// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create', 'create');
//     Route::get('/jobs/{job}', 'show');
//     Route::post('/jobs', 'store');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}', 'destroy');
// });

// Route::get('/blog', function () {
//     return view('blog.index', [
//         'posts' => Post::with('tags')->simplePaginate(10)
//     ]);
// });

// Route::get('/blog/{post}', function (Post $post) {
//     return view('blog.show', ['post' => $post]);
// });
