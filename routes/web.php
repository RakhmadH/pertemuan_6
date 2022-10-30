<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
<<<<<<< Updated upstream
=======
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AboutController;
use App\Http\Controllers\SendEmailController;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;


>>>>>>> Stashed changes


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

<<<<<<< Updated upstream
Route::get('/about', function () {
    return view('about',[
        "title"=>"Post",
        "post"=>Post::getAbout()
    ]);
});

=======
// Route::get('/about', function () {
//     return view('about',[
//         "title"=>"Post",
//         "post"=>Post::getAbout()
//     ]);
// });

// Route::get('/send-email',function(){
//     $data = [
//     'name' => 'Mamad',
//     'body' => 'Testing Kirim Email'
//     ];
   
//     Mail::to('mamatgomek@gmail.com')->send(new SendEmail($data));
   
//     dd("Email Berhasil dikirim.");
// });
   
>>>>>>> Stashed changes
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


<<<<<<< Updated upstream
Auth::routes();
=======
Auth::routes([
   
   ]);
>>>>>>> Stashed changes

Route::get('/send-email', [SendEmailController::class, 'index'])->name('kirim-email');
Route::post('/post-email', [SendEmailController::class, 'store'])->name('post-email');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
