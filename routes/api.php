<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LibraryUserController;
use App\Http\Controllers\BookBorrowedController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/category', [CategoryController::class,'index']);
Route::post('/createCategory', [CategoryController::class,'store']);
Route::put('/updateCategory/{id}', [CategoryController::class,'update']);
Route::delete('/destroyCategory/{id}', [CategoryController::class,'destroy']);

Route::get('/book', [BookController::class,'index']);
Route::post('/createBook', [BookController::class,'store']);
Route::put('/updateBook/{id}', [BookController::class,'update']);
Route::delete('/destroyBook/{id}', [BookController::class,'destroy']);

Route::get('/user', [LibraryUserController::class,'index']);
Route::post('/createUser', [LibraryUserController::class,'store']);
Route::put('/updateUser/{id}', [LibraryUserController::class,'update']);
Route::delete('/destroyUser/{id}', [LibraryUserController::class,'destroy']);

Route::get('/bookBorrowed', [BookBorrowedController::class,'index']);
Route::post('/createBookBorrowed', [BookBorrowedController::class,'store']);
Route::put('/updateBookBorrowed/{id}', [BookBorrowedController::class,'update']);
Route::delete('/destroyBookBorrowed/{id}', [BookBorrowedController::class,'destroy']);