<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// 使用者
Route::group(['prefix' => 'user'], function(){
    // 使用者驗證
    Route::group(['prefix' => 'auth'], function(){
        Route::get('/sign-up', 'UserAuthController@signUpPage');
        Route::post('/sign-up', 'UserAuthController@signUpProcess');
        Route::get('/sign-in', 'UserAuthController@signInPage');
        Route::post('/sign-in', 'UserAuthController@signInProcess');
        Route::get('/sign-out', 'UserAuthController@signOut');
        // Facebook 登入
        Route::get('/facebook-sign-in', 'UserAuthController@facebookSignInProcess');
        // Facebook 登入重新導向授權資料處理
        Route::get('/facebook-sign-in-callback', 'UserAuthController@facebookSignInCallbackProcess');
    });

    //會員收藏影片
    Route::get('/videos/collect/{user_id}', 'VideosController@user_collect_videosPage');
    Route::get('/videos/likes/{user_id}', 'VideosController@user_likes_videosPage');
    Route::get('/videos/subscribe/{user_id}', 'VideosController@user_subscribe_videosPage');
});

// 影片上傳
Route::group(['prefix' => 'video'], function(){
    Route::group(['prefix' => 'index'], function(){
        Route::get('{category_tag}','VideosController@video_area_categoryPage'); //影片頻道分類
        Route::get('{category_tag}/{sort}','VideosController@video_area_sortPage'); //影片頻道分類+排序(按時間、瀏覽、喜愛)
    });
    //影片內容顯示
    Route::get('/{category}/{id}', 'VideosController@videoPage');

    //新增上傳影片
    Route::post('/add', 'VideosController@addProcess');

    //會員新增喜愛影片 & 會員取消喜愛影片
    Route::post('/{video_id}/like', 'VideosController@video_likeProcess');
    Route::post('/{video_id}/dislike', 'VideosController@video_dislikeProcess');

    //會員新增收藏影片 & 會員取消收藏影片
    Route::post('/{video_id}/collect', 'VideosController@video_collectProcess');
    //Route::post('/{video_id}/collect', 'VideosController@video_test');
    Route::post('/{video_id}/discollect', 'VideosController@video_discollectProcess');


});


Route::get('/','VideosController@index');
Route::get('/test','ArticlesController@index_articles');
Route::get('/test2','ArticlesController@index_video');

Route::get('/test3','ArticlesController@video');