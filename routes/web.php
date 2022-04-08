<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//ユーザー新規登録ページ表示
Route::get('/register', [UserController::class, 'getregister']);
//ユーザー新規登録処理
Route::post('/register', [UserController::class, 'postregister']);
//ログインページ表示
Route::get('/login', [UserController::class, 'getlogin']);
//ログイン処理
Route::post('/login', [UserController::class, 'postlogin']);
