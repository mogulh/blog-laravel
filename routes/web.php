<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts = Post::latest()->get();
    return view('welcome',
['posts' => $posts]);
});


Route::get('{post:slug}', function (Post $post) {

    // dd($id);


    return view('post',
    ['post' => $post]);
});


Route::get("categories/{category:name}", function(Category $category){

    return view('welcome', ['posts'=> $category->posts]);
});

Route::get("author/{author:name}", function(User $author){

    return view('welcome', ['posts'=> $author->posts]);
});
