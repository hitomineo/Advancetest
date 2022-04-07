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
        return view('registerView');
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
    public function getlogin()
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
    public function getLogout(Request $request)
    {
        return redirect('/login');
    }
}
