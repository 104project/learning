@extends('layout.master')

@section('title', $title)

@section('css_link')

    <link rel="stylesheet" href="/layui/css/layui.css">

    <link rel="stylesheet" href="/css/theme.css">
    <style>

        .navecation ul li{
            list-style:none;
            float:left;
            padding-right:20px;
        }
        .navecation ul li a{
            text-decoration:none;
            color:#222;
            background-color:#ccc;
            padding:4px 5px;
        }

        .navecation ul li .active{
            background-color:#d90000;
            color:#fff;

        }

    </style>


@endsection



@section('content')

    @if(session('category_manu') == 'likes')
        <script>
            $(function() {
                $('li .val1').addClass("active");
            });
        </script>


    @elseif(session('category_manu') == 'collect')
        <script>
            $(function() {
                $('li .val2').addClass("active");
            });
        </script>


    @elseif(session('category_manu')== 'subscribe')
        <script>
            $(function() {
                $('li .val3').addClass("active");
            });
        </script>
    @else
        <script>
            $(function() {
                $('li a').removeClass("active");
            });
        </script>
    @endif




    <section class="content content-light  videos-list videos-list-grid">

        <div class="container">

            <div class="filter">

                <nav class="navecation">
                    <span style="float: left;margin-right: 10px;">分類 :</span>
                    <ul id="navi">

                        <li><a class="val1" href="/user/videos/likes/{user_id}">個人喜愛區</a></li>
                        <li><a class="val2" href="/user/videos/collect/{user_id}">個人收藏區</a></li>
                        <li><a class="val3" href="/user/videos/subscribe/{user_id}">個人訂閱區</a></li>

                    </ul>
                </nav>

            </div>

            <hr class="invisible" />

            <div class="row" style="display: flex;flex-wrap: wrap;">

                @foreach($User_Collect_Videos as $videos)
                    <article class="col-md-3 video-item"
                             style="background-color: white;
                            -webkit-box-shadow: inset 0 0 1px #666;
                            -moz-box-shadow: inset 0 0 1px #666;
                            box-shadow: inset 0 0 1px #666;
                            margin-bottom: 30px;
                            position: relative;
                            overflow: hidden;">

                        <a href="/video/{{ $videos->id }}" class="video-prev video-prev-small">
                            <img  width="100%" height="100%" src='http://img.youtube.com/vi/{{ $videos->video_id }}/mqdefault.jpg'></a>
                        <h3 class="video-title"><a href="/test3"> {{ $videos->title }}</a></h3>


                        <div class="row video-{{$videos->tag_color}}-params">
                            <div class="col-md-12">
                               <b>{{ $videos->category }}</b>
                            </div>
                        </div>


                    </article>
                @endforeach

            </div>

            <!-- Pagination -->




        </div>
    </section>
@endsection


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>


<script type="text/javascript" src="/layui/layui.js"></script>
