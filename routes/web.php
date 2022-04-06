<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\AdminMessagesController;
use App\Http\Controllers\AdminFriendshipsController;


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
    return view('front.home');
});

Route::group(['middleware'=>'admin'], function(){
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('/admin/users', AdminUsersController::class);
    Route::resource('/admin/posts', AdminPostsController::class);
    Route::get('/admin/messages', [AdminMessagesController::class,'index'])->name('admin.messages.index');
    Route::get('/admin/friendships', [AdminFriendshipsController::class,'index'])->name('admin.friendships.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
