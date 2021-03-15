<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

use App\Http\Controllers\BlogController;
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

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/hobby', function () {
    return view('hobby');
})->name('hobby');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('post/create', function () {
    DB::table('post')->insert([
        'title' => 'LAB4',
        'body' => 'Aisulu Bakhtybayeva'
    ]);
}); 

Route::get('post', [BlogController::class, 'index']);
Route::get('blog/create', function() {
    return view('blog.create');
});

Route::post('blog/create', [BlogController::class, 'store'])->name('add-blog');


