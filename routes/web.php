<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\ACController;


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

Route::get('/test-admin', function () {
    return view('layouts.admin');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin', function () {
    return view('layouts.admin');
});

Route::get('/profil', function () {
    return view('profil');
});
Auth::routes();

Route::get('/home', function () {
    return view('home');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('inventaris', InventarisController::class);
Route::resource('ac', ACController::class);
