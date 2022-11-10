<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AboutController;


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
    return view('welcome');
});

Route::get('/portofolio', function () {
    return view('portofolio',[
        "title"=>"Post",
        "post"=>Post::getHome()
    ]);
});

// Route::get('/about', function () {
//     return view('about',[
//         "title"=>"Post",
//         "post"=>Post::getAbout()
//     ]);
// });


Route::get('/education', function () {
    return view('education',[
        "title"=>"Post",
        "post"=>Post::getEducation()
    ]);
});

Route::get('/projects', function () {
    return view('projects',[
        "title"=>"Post",
        "post"=>Post::getProjects()
    ]);
});

Route::resource('posts',
'App\Http\Controllers\PostController');

Route::resource('about',
'App\Http\Controllers\AboutController');


Auth::routes([
    'reset' => false,
   ]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
