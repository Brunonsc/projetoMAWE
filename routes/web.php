<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class, 'index'])->name('user.home');

Route::get('user/create', [UserController::class, 'create'])->name('user.create');

Route::post('user', [UserController::class, 'store'])->name('user.store');

Route::get('user/{usuarios}/edit', [UserController::class, 'edit'])->name('user.edit');

Route::put('user/{usuarios}', [UserController::class, 'update'])->name('user.update');

Route::get('user/{usuarios}', [UserController::class, 'delete'])->name('user.delete');

