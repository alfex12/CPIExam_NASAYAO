<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;
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

Route::get('/posts', [PostsController::class, 'index']);
//Route::post('/posts /{id}', [PostsController::class, 'store']);
Route::post('/posts', [PostsController::class, 'store']);
Route::put('/posts', [PostsController::class, 'update']);
Route::delete('/posts', [PostsController::class, 'destroy']);

Route::get('/comments', [CommentsController::class, 'index']);
Route::post('/comments', [CommentsController::class, 'store']);
Route::put('/comments', [CommentsController::class, 'update']);
Route::delete('/comments', [CommentsController::class, 'destroy']);