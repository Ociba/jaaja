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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/servces', function () { return view('services');});
Route::get('/blog', function () { return view('blog');});
Route::get('/about', function () { return view('about');});
Route::get('/contact', function () { return view('contact');});
Route::get('/view-more', function () { return view('blog-details');});
