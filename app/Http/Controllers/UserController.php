<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



//ユーザー新規登録ページ
class UserController extends Controller
{


    public function registerView()
    {
<<<<<<< HEAD
        return view('layouts.registerView');
=======
        return view('registerView');
>>>>>>> 7d3f5f843ded5f9180b619127033e0b894c79e7a
    }
//ユーザー新規登録処理
    public function postregister(Request $request)
    {
//データーベースに登録と保存
        $user = new User();
        $user->name = $request->name;
        $user->mail_address = $request->mail_address;
        $user->password = $request->password;
        $user->save();
        return view('login');
}


//loginページ表示
<<<<<<< HEAD
    public function loginView()
    {
        return view('layouts.login');
    }
//ログイン処理
public function register(AuthRequest $request)
=======
    public function getlogin()
    {
        return view('login');
    }
//ログイン処理
public function postLogin(AuthRequest $request)
>>>>>>> 7d3f5f843ded5f9180b619127033e0b894c79e7a
    {
        $email = $request->mail_address;
        $password = $request->password;
    }

    //logoutページ
<<<<<<< HEAD
    public function logout(Request $request)
=======
    public function getLogout(Request $request)
>>>>>>> 7d3f5f843ded5f9180b619127033e0b894c79e7a
    {
        return redirect('/login');
    }
}
