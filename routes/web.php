<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/blog-read', function () {
    return view('blog-read');
});


// Route::get('/contact', [ContactController::class, 'index']);
Route::get('/contact', 'App\Http\Controllers\ContactController@index');

Route::post('/contact', 'App\Http\Controllers\ContactController@store');
// Route::post('/contact', [ContactController::class, 'store']);