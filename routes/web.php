<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\ProfileController;
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

        Route::get('usermanage', [ManageUserController::class, 'index'])->name('admin.usermanage');

    });

    Route::middleware('user')->group(function(){

        Route::middleware('verified')->get('home', [HomeUserController::class, 'index'])->name('home');
        Route::get('home', [HomeUserController::class, 'filter'])->name('home.filter');

        // Route::get('home', [ContentController::class, 'createForUser'])->name('user.content.create');
        // Route::post('home', [ContentController::class, 'storeForUser'])->name('user.content.store');

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
        Route::prefix('profile')->middleware('auth')->group(function(){
            Route::get('',[ProfileController::class,'index'])->name('profile');
            Route::get('edit/{id}',[ProfileController::class,'edit'])->name('profile.edit');
            Route::put('edit/{id}',[ProfileController::class,'update'])->name('profile.update');
        });

        Route::post('/comment/{contentId}', 'CommentController@store')->name('comment.store');

        Route::get('user_profile', function () {
            return view('user.profile');
        })->name('user_profile');

    });

});
