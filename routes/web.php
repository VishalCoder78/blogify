<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\Admin\blogReviewController;
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
    return view('welcome');
});

Route::get('/dashboard', [App\Http\Controllers\homeController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/blog', [App\Http\Controllers\blogController::class ,'viewBlog'])->middleware(['auth', 'verified'])->name('blog');;
Route::get('/project', [App\Http\Controllers\projectController::class ,'project'])->middleware(['auth', 'verified'])->name('project');;
Route::post('/user-blog', [App\Http\Controllers\blogController::class ,'blog'])->name('user-blog');
Route::get('/blog/{id}', [App\Http\Controllers\blogDetailsController::class, 'blogDetails' ]);
Route::post('/comment', [App\Http\Controllers\blogCommentController::class, 'storeComment'])->name('comment');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//admin Routes
Route::namespace('Admin')->prefix('admin')->name('admin/')->group(function(){
    Route::namespace('Auth')->middleware('guest:admin')->group(function(){
        //login
        Route::get('login',[App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class , 'create'])->name('login');
        Route::post('login',[App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class , 'store'])->name('adminlogin');
    });
    Route::middleware('admin')->group(function(){
        Route::get('dashboard',[App\Http\Controllers\Admin\HomeController::class , 'dashboard'])->name('dashboard');
        Route::get('blog', [App\Http\Controllers\Admin\blogReviewController::class ,'getBlog'])->name('blog');
        Route::post('blogStatus/{id}', [App\Http\Controllers\Admin\blogReviewController::class , 'blogStatus']);
        Route::get('/blog/{id}', [App\Http\Controllers\Admin\blogDetailsController::class, 'blogDetails' ]);
        Route::post('/comment', [App\Http\Controllers\Admin\commentController::class, 'storeComment'])->name('comment');

    });
    Route::post('logout',[App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class , 'destroy'])->name('logout');
    // Route::get('blog/accept', [APP\Http\Controllers\Admin\blogReviewController::class , 'BlogAccept']);
    // Route::post('decline', [APP\Http\Controllers\Admin\blogReviewController::class , 'decline'])->name('decline');
});