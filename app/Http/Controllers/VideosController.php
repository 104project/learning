<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;  // 驗證器
use App\Videos;
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
        $Videos_Category = DB::table('videocategory')->get();
        $Video = DB::table('videos')->where('id', '=', $id)->get();
        $SimilarVideos = DB::table('videos')->where('category', '=', $category)->where('id', '!=', $id)->get();

        foreach ($Video as $subject){
            $subject = $subject->title;
        }

        $binding = ['title' => '教學影片' , 'subject' => $subject, 'Video' => $Video , 'SimilarVideos' => $SimilarVideos, 'Videos_Category' => $Videos_Category];
        // 重新導向到影片區
        return view('video', $binding);

    }


    // 點擊like影片
    public function video_like($id){

        $Video = DB::table('videos')->where('id', '=', $id)->get();
        $SimilarVideos = DB::table('videos')->where('category', '=', $category)->where('id', '!=', $id)->get();

        foreach ($Video as $subject){
            $subject = $subject->title;
        }

        $binding = ['title' => '教學影片' , 'subject' => $subject, 'Video' => $Video , 'SimilarVideos' => $SimilarVideos];
        // 重新導向到影片區
        return view('video', $binding);

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
