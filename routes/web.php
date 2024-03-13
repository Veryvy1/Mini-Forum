<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ContactController;
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

    Route::get('landingpage', function () {
        return view('landingpage');
    });

    Route::middleware('admin')->group(function(){

        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

        Route::get('/content', [ContentController::class, 'index'])->name('content.index');
        Route::get('/content/create', [ContentController::class, 'createForAdmin'])->name('content.create');
        Route::post('/content', [ContentController::class, 'storeForAdmin'])->name('content.store');
        Route::put('/content/{content}/edit', [ContentController::class, 'edit'])->name('content.edit');
        Route::put('/content/{content}', [ContentController::class, 'update'])->name('content.update');
        Route::delete('/content/{content}', [ContentController::class, 'destroy'])->name('content.destroy');

        Route::resource('kategori', KategoriController::class);

        Route::resource('contact', ContactController::class);

        Route::get('reviews', function () {
            return view('admin.reviews');
        });

        Route::get('usermanage', [ManageUserController::class, 'index'])->name('admin.usermanage');
    });

    Route::middleware('user')->group(function(){
        Route::middleware('verified')->get('/home', [HomeUserController::class, 'index'])->name('home');
        Route::get('/home/create', [ContentController::class, 'createForUser'])->name('user.content.create');
        Route::post('/homecontent', [ContentController::class, 'storeForUser'])->name('user.content.store');
        Route::get('/homefilter', [HomeUserController::class, 'filter'])->name('home.filter');
        Route::get('/homesearch', [HomeUserController::class, 'index'])->name('home.search');


        Route::get('blog', function () {
            return view('user.blog');
        });

        // Route::get('contact', function () {
        //     return view('user.contact');
        // });

        Route::get('notifikasi', function () {
            return view('user.notifikasi');
        });

        Route::get('videos', function () {
            return view('user.videos');
        });

        Route::get('post-detail', function () {
            return view('user.postdetail');
        });

        // Route::post('/comment/{contentId}', 'CommentController@store')->name('comment.store');

        Route::get('comment', function () {
            return view('user.comment');
        })->name('comment');

        // Route::get('/profile/{id}', [ProfileController::class, 'index'])->name('profile.index');
        // Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        // Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/profile/{profile}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::put('/profile/{profile}', [ProfileController::class, 'update'])->name('profile.update');

        Route::get('signin', function () {
            return view('signin');
        })->name('signin');

        Route::get('abc', function () {
            return view('user.abc');
        })->name('abc');
    });

});



