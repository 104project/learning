<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;  // 驗證器
use App\Videos;

class VideosController extends Controller
{
    // 新增影片
    public function addProcess(){
        // 接收輸入資料
        $input = request()->all();

        // 驗證規則
        $rules = [
            // Title
            'title'=> [
                'required',
                'max:30',
            ],
            // Author
            'author' => [
                'required',
                'max:20',
            ],
            // Video_ID
            'video_id' => [
                'required',
                'max:40',
            ],
        ];

        // 驗證資料
        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            // 資料驗證錯誤
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }

        $Videos = Videos::create($input);

        // 重新導向到影片區
        return redirect('/test2');

    }
}
