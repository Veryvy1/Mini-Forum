<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin.index');
});
Route::get('test', function () {
    return view('admin.index');
});
Route::get('analytics', function () {
    return view('admin.analytics');
});
Route::get('event', function () {
    return view('admin.event');
});
Route::get('reviews', function () {
    return view('admin.reviews');
});
Route::get('profile', function () {
    return view('admin.profile');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




