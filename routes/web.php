<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
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
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/hobby', function () {
    return view('hobby');
})->name('hobby');

Route::get('/contact', function () {
    return view('contact');
})->name('contact_me');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('post/create', function () {
    DB::table('post')->insert([
        'title' => 'LAB4',
        'body' => 'Aisulu Bakhtybayeva'
    ]);
   
}); 

Route::get('post', function () {
    $post = Post::find(1);
    return $post; 
});

