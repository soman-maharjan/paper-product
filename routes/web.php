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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes(['register' => false,'reset' => false, 'verify' => false,]);

Route::post('/contact-store', [App\Http\Controllers\MessageController::class, 'store']);

Route::resource('/product', App\Http\Controllers\ProductController::class)->middleware('auth');

Route::get('/single-product/{product}', [App\Http\Controllers\ProductController::class, 'returnSingle']);

Route::get('/all-products', [App\Http\Controllers\ProductController::class, 'displayAllProducts']);

Route::post('/search', [App\Http\Controllers\ProductController::class, 'searchProduct']);

