<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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
Route::get('/category', [CategoryController::class, 'Cate'])->name('Cate.index');

Route::get('/AppCate', [CategoryController::class, 'app'])->name('App.index');
Route::post('/AppCate', [CategoryController::class, 'save']);

Route::get('FixCate/{id}', [CategoryController::class, 'chooseCate'])->name('Fix.index');
Route::post('FixCate/{id}', [CategoryController::class, 'returnFix']);


Route::get('DeleteCate/{id}', [CategoryController::class, 'Del'])->name('Del.index');