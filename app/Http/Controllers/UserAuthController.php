<?php

namespace App\Http\Controllers;


use Socialite;
use Validator;  // 驗證器
use Hash;       // 雜湊
use App\UserAuth as User;   // 使用者 Eloquent Model
use DB;
use Exception;

class UserAuthController extends Controller
{
    // 登入
    public function signInPage(){
        $binding = [
            'title' => '登入頁面' , 'subject' => '登入頁面'
        ];
        return view('auth.signIn', $binding);
    }

    // 註冊
    public function signUpPage(){
        $binding = [
            'title' => '註冊頁面' , 'subject' => '註冊頁面'
        ];
        return view('auth.signUp', $binding);
    }

    // Facebook 登入
    public function facebookSignInProcess()
    {
        $redirect_url = env('FACEBOOK_REDIRECT');

        return Socialite::driver('facebook')
            ->scopes(['user_friends'])
            ->redirectUrl($redirect_url)
            ->redirect();
    }

    // Facebook 登入重新導向授權資料處理
    public function facebookSignInCallbackProcess()
    {
        if (request()->error == 'access_denied') {
            throw new Exception('授權失敗，存取錯誤');
        }
        // 依照網域產出重新導向連結 (來驗證是否為發出時同一 callback )
        $redirect_url = env('FACEBOOK_REDIRECT');
        // 取得第三方使用者資料
        $FacebookUser = Socialite::driver('facebook')
            ->fields([
                'name',
                'email',
                'gender',
                'verified',
                'link',
                'first_name',
                'last_name',
                'locale',
            ])
            ->redirectUrl($redirect_url)->user();

        $facebook_email = $FacebookUser->email;

        if (is_null($facebook_email)) {
            throw new Exception('未授權取得使用者 Email');
        }
        // 取得 Facebook 資料
        $facebook_id = $FacebookUser->id;
        $facebook_name = $FacebookUser->name;

        // 取得使用者資料是否有此 Facebook id 資料
        $User = User::where('facebook_id', $facebook_id)->first();

        if (is_null($User)) {
            // 沒有綁定 Facebook Id 的帳號，透過 Email 尋找是否有此帳號
            $User = User::where('email', $facebook_email)->first();
            if (!is_null($User)) {
                // 有此帳號，綁定 Facebook Id
                $User->facebook_id = $facebook_id;
                $User->save();
            }
        }

        if (is_null($User)){
            // 尚未註冊
            $input = [
                'email'       => $facebook_email,   // Email
                'nickname'    => $facebook_name,    // 暱稱
                'password'    => uniqid(),          // 隨機產生密碼
                'facebook_id' => $facebook_id,      // Facebook ID
                'type'        => 'G',               // 一般使用者
            ];
            // 密碼加密
            $input['password'] = Hash::make($input['password']);
            // 新增會員資料
            $User = User::create($input);

            // 寄送註冊通知信
            //$mail_binding = [
           //     'nickname' => $input['nickname'],
           //     'email' => $input['email'],
            //];

            //SendSignUpMailJob::dispatch($mail_binding)
            //    ->onQueue('high');
        }

        // 登入會員
        // session 紀錄會員編號
        session()->put('user_id', $User->id);

        // 重新導向到原先使用者造訪頁面，沒有嘗試造訪頁則重新導向回首頁
        return redirect()->intended('/');
    }
}
