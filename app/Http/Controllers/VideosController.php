<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;  // 驗證器
use App\Videos;
use App\Videos_Likes;
use App\Videos_Collects;
use DB;

class VideosController extends Controller
{

    // 首頁 頁面
    public function index(){
        $Videos_Category = DB::table('videocategory')->get();

        $binding = ['title' => '教學影片' , 'subject' => '教學影片區',  'Videos_Category' => $Videos_Category];
        return view('index', $binding);
    }
    // 教學影片區 頁面
    public function video_areaPage(){
        $Videos_Category = DB::table('videocategory')->get();
        $Videos = DB::table('videos')->orderBy('updated_at', 'desc')->paginate(5);
        $binding = ['title' => '教學影片' , 'subject' => '教學影片區', 'Videos' => $Videos, 'Videos_Category' => $Videos_Category];
        return view('video_area', $binding);
    }
    // 教學影片區 分類標籤 頁面
    public function video_area_categoryPage($category_tag){
        $Videos_Category = DB::table('videocategory')->get();
        $Videos = DB::table('videos')->where('category', '=', $category_tag)->orderBy('updated_at', 'desc')->paginate(5);
        $subject = '「'.$category_tag.'」';
        $binding = ['title' => '教學影片' , 'subject' => $subject, 'Videos' => $Videos, 'Videos_Category' => $Videos_Category];
        session()->put('category_manu', 'time');
        session()->put('category_tag', $category_tag);
        return view('video_area', $binding);

    }

    // 教學影片區 分類標籤 頁面
    public function video_area_sortPage($category_tag, $sort){
        if($sort == 'time' ){
            $Videos = DB::table('videos')->where('category', '=', $category_tag)->orderBy('updated_at', 'desc')->paginate(5);
            session()->put('category_manu', $sort);
        }elseif ($sort == 'views'){
            $Videos = DB::table('videos')->where('category', '=', $category_tag)->orderBy('views_num', 'desc')->paginate(5);
            session()->put('category_manu', $sort);
        }elseif ($sort == 'likes'){
            $Videos = DB::table('videos')->where('category', '=', $category_tag)->orderBy('likes_num', 'desc')->paginate(5);
            session()->put('category_manu', $sort);
        }

        $Videos_Category = DB::table('videocategory')->get();
        $subject = '「'.$category_tag.'」';
        $binding = ['title' => '精選頻道' , 'subject' =>  $subject, 'Videos' => $Videos, 'Videos_Category' => $Videos_Category ];

        session()->put('category_tag', $category_tag);
        return view('video_area', $binding);

    }


    // 影片內容id對id
    public function video($category,$id){

        //取得觀看次數
        $Video_view = DB::table('videos')->where('id', '=', $id)->get();
        foreach ($Video_view as $view){
            $views_num = $view->views_num;
        }
        //更新觀看次數(點擊後+1)
        DB::table('videos')
            ->where('id', $id)
            ->update(['views_num' => $views_num+1]);

        //取得影片分類+取得點擊後所對應的影片資訊+找尋相類似頻道的影片
        $Videos_Category = DB::table('videocategory')->get();
        $Video = DB::table('videos')->where('id', '=', $id)->get();
        $SimilarVideos = DB::table('videos')->where('category', '=', $category)->where('id', '!=', $id)->get();

        //取得會員喜愛的影片資料
        $User_Like_Video = DB::table('videos_likes')
            ->where('user_id', '=', session('user_id'))
            ->where('like_video_id','=',$id)
            ->get();

        //計算喜愛人數
        $Video_likes_num = DB::table('videos_likes')
            ->where('like_video_id','=',$id)
            ->count();

        //更新videos資料庫的喜愛人數
        DB::table('videos')
            ->where('id', $id)
            ->update(['likes_num' => $Video_likes_num]);

        //取得會員收藏的影片資料
        $User_Collect_Video = DB::table('videos_collects')
            ->where('user_id', '=', session('user_id'))
            ->where('collect_video_id','=',$id)
            ->get();

        //取得頻道標題
        foreach ($Video as $subject){
            $subject = $subject->title;
        }

        $binding = ['title' => '教學影片' , 'subject' => $subject,
            'Video' => $Video , 'SimilarVideos' => $SimilarVideos,
            'Videos_Category' => $Videos_Category,
            'User_Like_Video' => $User_Like_Video,
            'Video_likes_num' => $Video_likes_num,
            'User_Collect_Video' => $User_Collect_Video
        ];

        // 重新導向到影片區
        return view('video', $binding);

    }


    // 會員點擊like影片
    public function video_like($video_id){
        //查詢使用者喜愛的影片數量(一部影片只能有一筆喜愛資料)
        $video_like_limit = DB::table('videos_likes')->where('user_id', '=', session('user_id'))->where('like_video_id', '=', $video_id)->count();

        if ($video_like_limit == 0){
            Videos_Likes::create(array('user_id' => session('user_id'), 'like_video_id' => $video_id));
        }


        //取得觀看次數
        $Video_view = DB::table('videos')->where('id', '=', $video_id)->get();
        foreach ($Video_view as $view){
            $views_num = $view->views_num;
        }
        //觀看次數-1，防止頁面重整後又多增加一次瀏覽
        DB::table('videos')
            ->where('id', $video_id)
            ->update(['views_num' => $views_num-1]);

        // 重新導向到影片區
        return redirect()->back();

    }

    // 會員取消like的影片(dislike)
    public function video_dislike($video_id){
        //查詢使用者喜愛的影片數量(至多一筆資料)
        $video_like_limit = DB::table('videos_likes')
            ->where('user_id', '=', session('user_id'))
            ->where('like_video_id', '=', $video_id)
            ->count();

        if ($video_like_limit == 1){
            DB::table('videos_likes')
                ->where('user_id', '=', session('user_id'))
                ->where('like_video_id', '=', $video_id)
                ->delete();
        }


        //取得觀看次數
        $Video_view = DB::table('videos')->where('id', '=', $video_id)->get();
        foreach ($Video_view as $view){
            $views_num = $view->views_num;
        }
        //觀看次數-1，防止頁面重整後又多增加一次瀏覽
        DB::table('videos')
            ->where('id', $video_id)
            ->update(['views_num' => $views_num-1]);

        // 重新導向到影片區
        return redirect()->back();

    }

    // 會員點擊collect影片
    public function video_collect($video_id){
        //查詢使用者喜愛的影片數量(一部影片只能有一筆收藏資料)
        $video_collect_limit = DB::table('videos_collects')->where('user_id', '=', session('user_id'))->where('collect_video_id', '=', $video_id)->count();

        if ($video_collect_limit == 0){
            Videos_Collects::create(array('user_id' => session('user_id'), 'collect_video_id' => $video_id));
        }


        //取得觀看次數
        $Video_view = DB::table('videos')->where('id', '=', $video_id)->get();
        foreach ($Video_view as $view){
            $views_num = $view->views_num;
        }
        //觀看次數-1，防止頁面重整後又多增加一次瀏覽
        DB::table('videos')
            ->where('id', $video_id)
            ->update(['views_num' => $views_num-1]);

        // 重新導向到影片區
        return redirect()->back();

    }

    // 會員取消collect的影片(discollect)
    public function video_discollect($video_id){
        //查詢使用者喜愛的影片數量(至多一筆資料)
        $video_collect_limit = DB::table('videos_collects')
            ->where('user_id', '=', session('user_id'))
            ->where('collect_video_id', '=', $video_id)
            ->count();

        if ($video_collect_limit == 1){
            DB::table('videos_collects')
                ->where('user_id', '=', session('user_id'))
                ->where('collect_video_id', '=', $video_id)
                ->delete();
        }


        //取得觀看次數
        $Video_view = DB::table('videos')->where('id', '=', $video_id)->get();
        foreach ($Video_view as $view){
            $views_num = $view->views_num;
        }
        //觀看次數-1，防止頁面重整後又多增加一次瀏覽
        DB::table('videos')
            ->where('id', $video_id)
            ->update(['views_num' => $views_num-1]);

        // 重新導向到影片區
        return redirect()->back();

    }

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
            // Content
            'content' => [
                'required',
                'max:150',
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
        return redirect()->back();

    }


}
