<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('gets/google_login');
    }

    public function login(Request $request)
    {
        // ログイン処理
        echo "成功しました";
    }

    public function logout(Request $request)
    {
        // ログアウト処理
    }
}
