<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;

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

Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/{post}', [PostController::class, 'show']);
Route::get('/blog/create/post', [PostController::class, 'create']); 
Route::post('/blog/create/post', [PostController::class, 'store']); 
Route::get('/blog/{post}/edit', [PostController::class, 'edit']); 
Route::put('/blog/{post}/edit', [PostController::class, 'update']); 
Route::delete('/blog/{post}', [PostController::class, 'destroy']);