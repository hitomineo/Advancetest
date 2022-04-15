<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

//ユーザー新規登録ページ
    class UserController extends Controller
{
    public function registerView()
    {
        return view('layouts.registerView');
    }


//ユーザー新規登録処理
    public function register(Request $request)
    {
        $this->validate($request, User::$rules);

        $form = $request->all();
        //User::create($form);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>Hash::make($request->password),
        ]);
        return redirect('/login');
    }





//loginページ表示
public function loginView()
    {
        return view('layouts.login');
    }


//ログイン処理
public function login(AuthRequest $request)
    {
        return view('login');
    }


//ログイン処理
public function postLogin(AuthRequest $request)

    {
        $email = $request->mail_address;
        $password = $request->password;
    }


//logoutページ
public function logout(Request $request)

    {
        return redirect('/login');
    }
}