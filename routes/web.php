<?php

use App\Http\Controllers\Auth\RegisterController;
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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['verify' => true]);
Route::middleware(['auth'])->group(function () {


    Route::middleware('admin')->group(function(){
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
        Route::get('admin_profile', function () {
            return view('admin.profile');
        });
    });

    Route::middleware('user')->group(function(){

        // Route::middleware('verified')->get('dashboard', function () {
        //     return view('user.index');
        // });

        Route::middleware('verified')->get('dashboard', [UserController::class, 'index'])->name('dashboard');


        Route::get('dashboard2', function () {
            return view('user.index2');
        });

        Route::get('blog', function () {
            return view('user.blog');
        });

        Route::get('videos', function () {
            return view('user.videos');
        });

        Route::get('post-detail', function () {
            return view('user.postdetail');
        });

        Route::get('user_profile', function () {
            return view('user.profile');
        })->name('user_profile');

    });

});
