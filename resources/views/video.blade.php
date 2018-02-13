@extends('layout.master')

@section('title', $title)

@section('content')
    <section class="content content-light  videos-list videos-list-grid">
        <div class="container">
            <div class="pull-right list-view-change">
                <a href="videos-grid.htm" class="active"><i class="fa fa-th-large"></i> 網格排序</a>
                <a href="videos-list.htm"><i class="fa fa-th-list"></i> 清單排序</a>
            </div>
            <div class="filter">
                <a href="#" class="btn btn-theme navbar-btn btn-orange">所有影片</a> &nbsp;
                <a href="#" class="btn btn-theme navbar-btn btn-lightblue">ERP</a>
                <a href="#" class="btn btn-theme navbar-btn btn-lightblue">SFT</a>
                <a href="#" class="btn btn-theme navbar-btn btn-lightblue">ERP整合SFT</a>
                <a href="#" class="btn btn-theme navbar-btn btn-lightblue">Arduino</a>
            </div>

            <hr class="invisible" />

            <div class="row">
                <article class="col-md-4 video-item">
                    <a href="video.htm" class="video-prev video-prev-small"><img  width="294" height="200" src='http://img.youtube.com/vi/go6q_ZKRnvE/mqdefault.jpg'></a>
                    <h3 class="video-title"><a href="video.htm">[蛋黃酥禮盒教學案例] 生產線資料建立作業</a></h3>
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