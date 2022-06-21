<?php

use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'auth',
], function() {
    Route::view('/', 'admin.main');
    Route::get('posts', [PostController::class, 'index']);
    Route::get('comments', [CommentController::class, 'index']);
    Route::get('users', [UserController::class, 'index']);
});

