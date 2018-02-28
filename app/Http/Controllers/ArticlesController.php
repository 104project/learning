<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index_articles()
    {
        $binding = ['title' => '教學案例' , 'subject' => '蛋黃酥 - 案例教學 (ERP整合SFT)'];
        return view('articles', $binding);
    }

    public function index_video()
    {
        $binding = ['title' => '教學影片' , 'subject' => '教學影片區'];
        return view('video_sections', $binding);
    }

    public function video()
    {
        $binding = ['title' => '教學影片' , 'subject' => '[蛋黃酥禮盒教學案例] 生產線資料建立作業'];
        return view('video', $binding);
    }
}
