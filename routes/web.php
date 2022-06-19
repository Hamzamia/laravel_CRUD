<?php

use App\Http\Controllers\CategoryCotroller;
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


Route::get('/testing', [CategoryCotroller::class, 'index']);
Route::get('/category-create', [CategoryCotroller::class, 'create']);
Route::post('/category-store', [CategoryCotroller::class, 'store']);
Route::get('/category-edit/{id}', [CategoryCotroller::class, 'edit']);
Route::put('/category-update/{id}', [CategoryCotroller::class, 'update']);
Route::get('/category-delete/{id}', [CategoryCotroller::class, 'destroy']);