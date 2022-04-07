<?php

use App\Http\Controllers\MyController;

use App\Http\Controllers\PostController;
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


// Route::get('/bismilla', function(){
//     // return "Bismillahir Rahmanir Rahim";
//     return view("myview");
// });

Route::get('/lina', [MyController::class, 'myfunction']);


// Route::get('/hello', [PostController::class,'index']);
// Route::post('/hello', [PostController::class,'store']);
// Route::get('/hello/create', [PostController::class,'create']);
// Route::get('/hello/{id}', [PostController::class,'show']);
// Route::get('/hello/{id}/edit', [PostController::class, 'edit']);
// Route::put('/hello/{id}', [PostController::class, 'update']);
// Route::delete('/hello/{id}', [PostController::class, 'destroy']);

Route::get('/posts', [PostController::class, 'index'])->name('posts.all');
Route::post('/posts', [PostController::class, 'store'])->name('post.add');
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('post.show');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('post.update');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('post.delete');