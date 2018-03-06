@extends('layout.master')

@section('title', $title)

@section('css_link')

    <link rel="stylesheet" href="/layui/css/layui.css">

    <link rel="stylesheet" href="/css/theme.css">
    <script type="text/javascript" src="/js/jquery2.min.js"></script>
    <script type="text/javascript" src="/js/theme.js"></script>

    <script>
        jQuery(document).ready(function($) {
            $('.theme-login').click(function(){
                $('.theme-popover-mask').fadeIn(100);
                $('.theme-popover').slideDown(200);
            })
            $('.theme-poptit .close').click(function(){
                $('.theme-popover-mask').fadeOut(100);
                $('.theme-popover').slideUp(200);
            })

        })

        jQuery(document).ready(function($) {
            $('.theme-newlogin').click(function(){
                $('.theme-newpopover-mask').fadeIn(100);
                $('.theme-newpopover').slideDown(200);
            })
            $('.theme-newpoptit .close').click(function(){
                $('.theme-newpopover-mask').fadeOut(100);
                $('.theme-newpopover').slideUp(200);
            })

        })
    </script>

    @if($errors AND count($errors))
        <script>
            jQuery(document).ready(function($) {

                    $('.theme-popover-mask').fadeIn(100);
                    $('.theme-popover').slideDown(200);

                $('.theme-poptit .close').click(function(){
                    $('.theme-popover-mask').fadeOut(100);
                    $('.theme-popover').slideUp(200);
                    window.location.reload();
                })

            })
        </script>

    @endif


@endsection

@section('content')
    <section class="content content-light  videos-list videos-list-grid">
        <div class="container">

            <div class="theme-newpopover-mask"></div>

            <div class="pull-right list-view-change">
                <a class="layui-btn theme-login"  style="padding: 5px 15px;background-color: #ff0000a6; color: #fff;"  href="javascript:;">
                    <i class="layui-icon" style="vertical-align: unset;">&#xe654;</i>新增影片</a>

                <div class="theme-popover">
                    <div class="theme-poptit">
                        <a href="javascript:;" title="关闭" class="close">×</a>
                        <h3 style=" font-family: 微軟正黑體; font-weight: bold;" >新增影片</h3>
                    </div>

                    {{-- 錯誤訊息模板元件 --}}
                    @include('components.validationErrorMessage')
                    <div class="theme-popbod dform">

                        <form class="theme-signin" name="add_video" action="/video/add" method="post">
                            <ol>

                                <li>
                                    <strong>影片標題：</strong>
                                    <input class="ipt" type="text" name="title"  placeholder="title"/>
                                </li>
                                <li>
                                    <strong>影片分類：</strong>
                                    <select  name="category" id="category">
                                        <option value=" ERP - 動畫版">
                                           ERP - 動畫版
                                        </option>
                                        <option value="SFT - 動畫版">
                                            SFT - 動畫版
                                        </option>
                                        <option value="ERP 整合 SFT">
                                           ERP 整合 SFT
                                        </option>
                                    </select>
                                </li>
                                <li>
                                    <strong>作者：</strong>
                                    <input class="ipt" type="text"  name="author"  placeholder="author"/>
                                </li>
                                <li>
                                    <strong>影片ID：</strong>
                                    <input class="ipt" type="text" name="video_id"  placeholder="youtube_video_ID"/>
                                    <a  class="btn  btn-large theme-newlogin" href="javascript:;">ID如何填寫 ?</a>
                                </li>

                                <input type="hidden" name="views_num" value="0">
                                <input type="hidden" name="likes_num" value="0">

                                <li>
                                    <input class="btn btn-primary" type="submit" name="submit" value=" 確認上傳 " />
                                </li>

                            </ol>

                            {{-- CSRF 欄位--}}
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
                <div class="theme-popover-mask"></div>

                <div class="theme-newpopover">
                    <div class="theme-newpoptit">
                        <a href="javascript:;" title="关闭" class="close">返回 &#8629;</a>
                        <h3>該如何填寫影片ID欄位 ?</h3>
                    </div>
                    <div class="theme-popbod newdform">
                        <form class="theme-signin" name="loginform" action="" method="post">
                            <ol>
                                <br>
                                <p style="font-size: medium;font-weight: 600;">本系統只接受YOUTUBE上的影片 !</p>
                                <br>
                                <p style="font-size: x-large;font-weight: 800;">教學範例:</p>

                                <p style="font-size: medium;font-weight:600;">影片網址若為https://www.youtube.com/watch?v=<span style="color: tomato;">go6q_ZKRnvE</span></p>
                                <p style="font-size: medium;font-weight: 600;">影片ID即為<span style="color: tomato;">go6q_ZKRnvE</span></p>
                                <br>
                                <img src="img/EX.jpg" alt="Smiley face" width="95%">

                            </ol>
                        </form>
                    </div>
                </div>

            </div>

            <div class="filter">
                <a href="#" class="btn btn-newtheme btn-neworange">所有影片</a> &nbsp;
                <a href="#" class="btn btn-newtheme btn-newgreen">ERP - 動畫版</a>
                <a href="#" class="btn btn-newtheme btn-newgreen">SFT - 動畫版</a>
                <a href="#" class="btn btn-newtheme btn-newgreen">ERP 整合 SFT</a>
            </div>

            <hr class="invisible" />

            <div class="row">
                <article class="col-md-4 video-item">
                    <a href="/test3" class="video-prev video-prev-small">
                        <img  width="100%" height="100%" src='http://img.youtube.com/vi/go6q_ZKRnvE/maxresdefault.jpg'></a>
                    <h3 class="video-title"><a href="/test3">[蛋黃酥禮盒教學案例] 生產線資料建立作業</a></h3>
                    <div class="row video-params">
                        <div class="col-md-8">
                            Author: <b>Jing Ru Sun</b>
                        </div>
                        <div class="col-md-4 text-right">
                            Views: <b>312</b>
                        </div>
                    </div>
                    <div class="row video-params">
                        <div class="col-md-7">
                            Date: <b>13, Jan 2013</b>
                        </div>
                        <div class="col-md-5 text-right">
                            Likes: <b>102</b> <a href="#"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="row video-params">
                        <div class="col-md-12">
                            Category: <b>ERP整合SFT</b>
                        </div>
                    </div>
                </article>
                <article class="col-md-4 video-item">
                    <a href="video.htm" class="video-prev video-prev-small"></a>
                    <h3 class="video-title"><a href="video.htm">How to draw a painting</a></h3>
                    <div class="row video-params">
                        <div class="col-md-8">
                            Author: <b>Joe Doe</b>
                        </div>
                        <div class="col-md-4 text-right">
                            Views: <b>312</b>
                        </div>
                    </div>
                    <div class="row video-params">
                        <div class="col-md-7">
                            Date: <b>13, Jan 2013</b>
                        </div>
                        <div class="col-md-5 text-right">
                            Likes: <b>102</b> <a href="#"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="row video-params">
                        <div class="col-md-12">
                            Category: <b>Drawing</b>
                        </div>
                    </div>
                </article>
                <article class="col-md-4 video-item">
                    <a href="video.htm" class="video-prev video-prev-small"></a>
                    <h3 class="video-title"><a href="video.htm">How to draw a painting</a></h3>
                    <div class="row video-params">
                        <div class="col-md-8">
                            Author: <b>Joe Doe</b>
                        </div>
                        <div class="col-md-4 text-right">
                            Views: <b>312</b>
                        </div>
                    </div>
                    <div class="row video-params">
                        <div class="col-md-7">
                            Date: <b>13, Jan 2013</b>
                        </div>
                        <div class="col-md-5 text-right">
                            Likes: <b>102</b> <a href="#"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="row video-params">
                        <div class="col-md-12">
                            Category: <b>Drawing</b>
                        </div>
                    </div>
                </article>
            </div>

            <div class="row">
                <article class="col-md-4 video-item">
                    <a href="video.htm" class="video-prev video-prev-small"></a>
                    <h3 class="video-title"><a href="video.htm">How to draw a painting</a></h3>
                    <div class="row video-params">
                        <div class="col-md-8">
                            Author: <b>Joe Doe</b>
                        </div>
                        <div class="col-md-4 text-right">
                            Views: <b>312</b>
                        </div>
                    </div>
                    <div class="row video-params">
                        <div class="col-md-7">
                            Date: <b>13, Jan 2013</b>
                        </div>
                        <div class="col-md-5 text-right">
                            Likes: <b>102</b> <a href="#"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="row video-params">
                        <div class="col-md-12">
                            Category: <b>Drawing</b>
                        </div>
                    </div>
                </article>
                <article class="col-md-4 video-item">
                    <a href="video.htm" class="video-prev video-prev-small"></a>
                    <h3 class="video-title"><a href="video.htm">How to draw a painting</a></h3>
                    <div class="row video-params">
                        <div class="col-md-8">
                            Author: <b>Joe Doe</b>
                        </div>
                        <div class="col-md-4 text-right">
                            Views: <b>312</b>
                        </div>
                    </div>
                    <div class="row video-params">
                        <div class="col-md-7">
                            Date: <b>13, Jan 2013</b>
                        </div>
                        <div class="col-md-5 text-right">
                            Likes: <b>102</b> <a href="#"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="row video-params">
                        <div class="col-md-12">
                            Category: <b>Drawing</b>
                        </div>
                    </div>
                </article>
                <article class="col-md-4 video-item">
                    <a href="video.htm" class="video-prev video-prev-small"></a>
                    <h3 class="video-title"><a href="video.htm">How to draw a painting</a></h3>
                    <div class="row video-params">
                        <div class="col-md-8">
                            Author: <b>Joe Doe</b>
                        </div>
                        <div class="col-md-4 text-right">
                            Views: <b>312</b>
                        </div>
                    </div>
                    <div class="row video-params">
                        <div class="col-md-7">
                            Date: <b>13, Jan 2013</b>
                        </div>
                        <div class="col-md-5 text-right">
                            Likes: <b>102</b> <a href="#"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="row video-params">
                        <div class="col-md-12">
                            Category: <b>Drawing</b>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Pagination -->
            <ul class="pagination">
                <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><a href="videos-list.htm">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </div>
    </section>
@endsection

<script type="text/javascript" src="/layui/layui.js"></script>


