<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
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


Auth::routes(['verify' => true]);
Route::middleware(['auth'])->group(function () {


    Route::middleware('admin')->group(function(){

        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

        Route::resource('content', ContentController::class);
        Route::resource('kategori', KategoriController::class);

        Route::get('reviews', function () {
            return view('admin.reviews');
        });
        Route::get('usermanage', function () {
            return view('admin.usermanage');
        });

    });

    Route::middleware('user')->group(function(){

        Route::middleware('verified')->get('home', [UserController::class, 'index'])->name('home');

        Route::get('dashboard2', function () {
            return view('user.index2');
        });

        Route::get('blog', function () {
            return view('user.blog');
        });

        Route::get('notifikasi', function () {
            return view('user.notifikasi');
        });

        Route::get('videos', function () {
            return view('user.videos');
        });

        Route::get('post-detail', function () {
            return view('user.postdetail');
        });
        Route::get('comment', function () {
            return view('user.comment');
        });

        Route::get('user_profile', function () {
            return view('user.profile');
        })->name('user_profile');

    });

});
