<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
<<<<<<< HEAD
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

//ユーザー新規登録ページ
Route::get('/register', [UserController::class, 'registerView']);
//ユーザー新規登録処理
Route::post('/register', [UserController::class, 'register']);
//ログインページ表示
Route::get('/login', [UserController::class, 'loginView']);
//ログイン処理
Route::post('/login', [UserController::class, 'login']);
=======

//ユーザー新規登録ページ表示
Route::get('/register', [UserController::class, 'getregister']);
//ユーザー新規登録処理
Route::post('/register', [UserController::class, 'postregister']);
//ログインページ表示
Route::get('/login', [UserController::class, 'getlogin']);
//ログイン処理
Route::post('/login', [UserController::class, 'postlogin']);
>>>>>>> 7d3f5f843ded5f9180b619127033e0b894c79e7a
