<?php

namespace App\Http\Controllers;

use App\UserAuth;
use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    // 註冊
    public function signUpPage(){
        $binding = [
            'title' => '註冊頁面' , 'subject' => '註冊頁面'
        ];
        return view('auth.signUp', $binding);
    }
}
