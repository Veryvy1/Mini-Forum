<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\UserController;
use Illuminate\Mail\Mailables\Content;
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
    return view('landingpage');
});


Auth::routes(['verify' => true]);
Route::middleware(['auth'])->group(function () {

    Route::middleware('admin')->group(function(){

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::post('/contents/upload-image', [ContentController::class, 'uploadImage'])->name('contents.uploadImage');

        Route::get('/content', [ContentController::class, 'index'])->name('content.index');
        Route::get('/contentsearch', [ContentController::class, 'index'])->name('content.search');
        Route::get('/contentfilter', [ContentController::class, 'filter'])->name('content.filter');
        Route::get('/content/create', [ContentController::class, 'createForAdmin'])->name('content.create');
        Route::post('/content', [ContentController::class, 'storeForAdmin'])->name('content.store');
        Route::put('/content/{content}/edit', [ContentController::class, 'edit'])->name('content.edit');
        Route::put('/content/{content}', [ContentController::class, 'update'])->name('content.update');

        Route::resource('kategori', KategoriController::class);

        Route::get('reviews', function () {
            return view('admin.reviews');
        });

        Route::get('usermanage', [ManageUserController::class, 'index'])->name('usermanage.index');
        Route::delete('/usermanage/{usermanage}', [ManageUserController::class, 'destroy'])->name('usermanage.destroy');
    });

    Route::middleware('user')->group(function(){
        Route::middleware('verified')->get('/home', [HomeUserController::class, 'index'])->name('home');
        Route::get('/home/create/{$id}', [ContentController::class, 'createForUser'])->name('user.content.create');
        Route::get('/profil/create/{$id}', [ContentController::class, 'createdForUser'])->name('user.content.created');
        Route::get('/homefilter', [HomeUserController::class, 'filter'])->name('home.filter');
        Route::post('/homecontent', [ContentController::class, 'storeForUser'])->name('user.content.store');
        Route::post('/profilcontent', [ContentController::class, 'storeForUserProfil'])->name('user.contents.store');
        Route::get('/homesearch', [HomeUserController::class, 'index'])->name('home.search');
        Route::get('/comment/{id}', [CommentController::class, 'commentId'])->name('content.comment');
        Route::post('/comment/{contentId}', [CommentController::class, 'store'])->name('comment.store');
        Route::get('/reply/{id}', [ReplyController::class, 'replyId'])->name('comment.reply');
        Route::post('/reply/{commentId}', [ReplyController::class, 'store'])->name('reply.store');
        Route::get('/reply1/{id}', [ReplyController::class, 'replyId1'])->name('comment.reply1');
        Route::post('/reply1/{replyId}', [ReplyController::class, 'store1'])->name('reply1.store');
        Route::get('/reply2/{id}', [ReplyController::class, 'replyId2'])->name('comment.reply2');
        Route::post('/reply2/{replyId1}', [ReplyController::class, 'store2'])->name('reply2.store');
        Route::post('/content/{id}/like', [LikeController::class, 'like'])->name('content.like');
        Route::get('/morecontent', [ContentController::class, 'contentMore'])->name('more.home');


        Route::get('blog', function () {
            return view('user.blog');
        });

        Route::get('notifikasi', function () {
            return view('user.notifikasi');
        });

        Route::get('videos', function () {
            return view('user.videos');
        });
        Route::get('dt', function () {
            return view('user.allcontent');
        });

        Route::get('comment', function () {
            return view('user.comment');
        })->name('comment');

        Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/profile/{profile}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::put('/profile/{profile}', [ProfileController::class, 'update'])->name('profile.update');

        Route::get('/profil', [ProfileController::class, 'profil'])->name('profile.profil');

        Route::get('abc', function () {
            return view('user.abc');
        })->name('abc');
    });
    Route::delete('/comment/{comment}', [CommentController::class, 'destroy'])->name('comment.destroy');
    Route::resource('contact', ContactController::class);
    Route::delete('/content/{content}', [ContentController::class, 'destroy'])->name('content.destroy');
    Route::delete('/reply/{reply}', [ReplyController::class, 'destroy'])->name('reply.destroy');
});
Route::post('like',[LikeController::class,'store'])->name('like.store');
Route::delete('unlike/{like}',[LikeController::class,'destroy'])->name('like.destroy');
Route::get('/content/{content}', [ContentController::class, 'detail'])->name('content.detail');
