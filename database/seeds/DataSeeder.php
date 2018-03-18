<?php

use Illuminate\Database\Seeder;
use App\UserAuth as UserAuthEloquent;
use App\VideoCategory as VideoCategoryEloquent;
use App\Videos as VideosEloquent;
class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserAuthEloquent::create([ 'email' => 'sun.mlr06444@gmail.com',
            'password' => '$2y$10$IRQQVXrKCDzxVNhpA6/bwuqXMD7a/MearT1NiGXosFpFOF5wc5.BW'
            , 'facebook_id' => '2049409421969681', 'google_id' => 'NULL'
            , 'type' => 'G', 'nickname' => '孫靖茹'
        ]);

        VideoCategoryEloquent::create([ 'tag' => '工業 4.0', 'tag_color' => 'gray']);
        VideoCategoryEloquent::create([ 'tag' => 'ERP廠區生產追蹤 - 動畫篇', 'tag_color' => 'purple']);
        VideoCategoryEloquent::create([ 'tag' => '蛋黃酥 - 案例教學', 'tag_color' => 'green']);

        VideosEloquent::create([ 'title' => 'NCUT馬座自動倉儲', 'category' => '工業 4.0',
                                'author' => 'NCUT工業工程管理學系', 'user_id' => '1'
                                , 'video_id' => 'K6Qvvirsi8o', 'content' => 'NCUT馬座自動倉儲，由工業工程管理學系所提供。'
                                , 'views_num' => '5', 'likes_num' => '0'
        ]);

        VideosEloquent::create([ 'title' => 'NCUT四軸手臂及雷雕流程', 'category' => '工業 4.0',
            'author' => 'NCUT工業工程管理學系', 'user_id' => '1'
            , 'video_id' => 'ivoGAmFOYoU', 'content' => 'NCUT四軸手臂及雷雕流程，本片由工業工程管理學系所提供。'
            , 'views_num' => '8', 'likes_num' => '0'
        ]);

        VideosEloquent::create([ 'title' => 'NCUT AGV無人車搬運流程', 'category' => '工業 4.0',
            'author' => 'NCUT工業工程管理學系', 'user_id' => '1'
            , 'video_id' => '-fSQueRhsCc', 'content' => 'NCUT AGV無人車搬運流程，本影片由工業工程管理學系所提供。'
            , 'views_num' => '20', 'likes_num' => '0'
        ]);

        VideosEloquent::create([ 'title' => '[蛋黃酥案例]-生產線建立作業-01', 'category' => '蛋黃酥 - 案例教學',
            'author' => 'Jing-Ru Sun', 'user_id' => '1'
            , 'video_id' => 'go6q_ZKRnvE', 'content' => '基本資料管理系統 - 生產線資料 :
     以生產「蛋黃酥禮盒」為案例，總共分成三條生產線。裡面含有BOM表介紹、產品製程說明。'
            , 'views_num' => '15', 'likes_num' => '0'
        ]);

        VideosEloquent::create([ 'title' => 'ERP和SFT簡介小短片-01	', 'category' => 'ERP廠區生產追蹤 - 動畫篇',
            'author' => '鄔琇容', 'user_id' => '1'
            , 'video_id' => 'BaR3xOdj5mw', 'content' => '使用軟體為 crazytalk animator 3 和 威力導演後製 和 工研院的文字語音web服務'
            , 'views_num' => '20', 'likes_num' => '0'
        ]);


        VideosEloquent::create([ 'title' => '[蛋黃酥案例]-製程代號建立作業-02', 'category' => '蛋黃酥 - 案例教學',
            'author' => '賴佳宜', 'user_id' => '1'
            , 'video_id' => 'M65JYHg2Dqg', 'content' => '製程代號建立作業的過程介紹'
            , 'views_num' => '10', 'likes_num' => '0'
        ]);
        VideosEloquent::create([ 'title' => '[蛋黃酥案例]-品號建立作業-03', 'category' => '蛋黃酥 - 案例教學',
            'author' => '賴佳宜', 'user_id' => '1'
            , 'video_id' => 'QdZpZutnLhE', 'content' => '品號建立作業的過程介紹'
            , 'views_num' => '8', 'likes_num' => '0'
        ]);
        VideosEloquent::create([ 'title' => '[蛋黃酥案例]-產品途程建立作業-04', 'category' => '蛋黃酥 - 案例教學',
            'author' => '賴佳宜', 'user_id' => '1'
            , 'video_id' => 'NSyUg3sSlE0', 'content' => '產品途程建立作業的過程介紹'
            , 'views_num' => '25', 'likes_num' => '0'
        ]);

    }
}
