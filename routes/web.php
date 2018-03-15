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
        Route::get('/account', 'UserAuthController@accountPage');
        Route::get('/sign-up', 'UserAuthController@signUpPage');
        Route::post('/sign-up', 'UserAuthController@signUpProcess');
        Route::get('/sign-in', 'UserAuthController@signInPage');
        Route::post('/sign-in', 'UserAuthController@signInProcess');
        Route::get('/sign-out', 'UserAuthController@signOut');
        // Facebook 登入
        Route::get('/facebook-sign-in', 'UserAuthController@facebookSignInProcess');
        // Facebook 登入重新導向授權資料處理
        Route::get('/facebook-sign-in-callback', 'UserAuthController@facebookSignInCallbackProcess');
        // Google 登入
        Route::get('/google-sign-in', 'UserAuthController@googleSignInProcess');
        // Google 登入重新導向授權資料處理
        Route::get('/google-sign-in-callback', 'UserAuthController@googleSignInCallbackProcess');
    });
});

// 影片上傳
Route::group(['prefix' => 'video'], function(){
    Route::group(['prefix' => 'index'], function(){
        Route::get('/', 'VideosController@video_areaPage');
        Route::get('{category_tag}','VideosController@video_area_categoryPage');
        Route::get('{category_tag}/{sort}','VideosController@video_area_sortPage'); //影片分類+排序
    });
        Route::post('/add', 'VideosController@addProcess');
        //會員新增喜愛影片 & 會員取消喜愛影片
        Route::post('/{video_id}/like', 'VideosController@video_like');
        Route::post('/{video_id}/dislike', 'VideosController@video_dislike');

        //會員新增收藏影片 & 會員取消收藏影片
        Route::post('/{video_id}/collect', 'VideosController@video_collect');
        Route::post('/{video_id}/discollect', 'VideosController@video_discollect');

        Route::get('/{category}/{id}', 'VideosController@video');
});


Route::get('/','VideosController@index');
Route::get('/test','ArticlesController@index_articles');
Route::get('/test2','ArticlesController@index_video');

Route::get('/test3','ArticlesController@video');