<?php

use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    Route::get('comments', [CommentController::class, 'index']);
    Route::get('users', [UserController::class, 'index']);
    Route::group([
        'prefix' => 'posts',
        'as' => 'posts.',
    ], function(){
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('create', [PostController::class, 'create'])->name('create');
    Route::post('store', [PostController::class, 'store'])->name('store');
    Route::get('/{post}', [PostController::class, 'edit'])->name('edit');
    Route::put('/{post}', [PostController::class, 'update'])->name('update');
    });
});

// Route::group([
//     'prefix' => 'admin',
//     'as' => 'admin.',
//     'middleware' => 'auth',
// ], function () {
//     Route::view('/', 'admin.main');
//     Route::controller(PostController::class)->group([
//         'prefix' => 'posts',
//         'as' => 'posts.'
//     ], function () {
//         Route::get('/', 'index')->name('index');
//         Route::get('create', 'create')->name('create');
//         Route::post('store', 'store')->name('store');
//         // Route::get('/{post}', 'edit')->name('edit');
//         // Route::put('/{post}', 'update')->name('update');
//     });
// });
