@extends('layout.master')

@section('title', $title)

@section('content')

<!-- Video: film view -->
<section class="content content-light  video-film">
    <div class="container">
        <!-- Video film view - center -->
        <div class="row">
            <div class="col-md-8">
                <article>
                    <!-- Video film - player -->
                    <div  style="border-radius: 20px;width:616px;margin:0 auto;overflow:hidden;">
                        <iframe width="616.66" height="350" src="https://www.youtube.com/embed/go6q_ZKRnvE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>

                        </iframe>

                    </div>



                    <div class="video-content">
                        <p>以生產「蛋黃酥禮盒」為案例，總共分成三條生產線。裡面含有BOM表介紹、產品製程說明。</p>
                    </div>

                    <hr class="invisible" />
                    <hr class="invisible" />

                    <!-- Video - related -->
                    <section class="related">
                        <h2>Similar videotutorials</h2>
                        <div class="row  videos-list">
                            <article class="col-md-6  video-item">
                                <a href="video.htm" class="video-prev video-prev-small"></a>
                                <p class="button-full"><a href="https://www.youtube.com/embed/go6q_ZKRnvE" class="btn btn-theme btn-green">How to draw a painting</a></p>
                            </article>
                            <article class="col-md-6  video-item">
                                <a href="video.htm" class="video-prev video-prev-small"></a>
                                <p class="button-full"><a href="video.htm" class="btn btn-theme btn-green">How to draw a painting</a></p>
                            </article>
                        </div>
                        <div class="row">
                            <article class="col-md-6  video-item">
                                <a href="video.htm" class="video-prev video-prev-small"></a>
                                <p class="button-full"><a href="video.htm" class="btn btn-theme btn-green">How to draw a painting</a></p>
                            </article>
                            <article class="col-md-6  video-item">
                                <a href="video.htm" class="video-prev video-prev-small"></a>
                                <p class="button-full"><a href="video.htm" class="btn btn-theme btn-green">How to draw a painting</a></p>
                            </article>
                        </div>
                    </section>
                </article>
            </div>
            <aside class="col-md-4" style="
    margin-top: 23px;">

                <p class="video-params">
                    Author： <b>Jing Ru Sun</b> <br />
                    Date： <b>13, Jan 2013</b> <br />
                    Category： <b>ERP整合SFT</b> <br />
                    Views： <b>312</b> <br />
                    Likes： <b>15</b> <a href="#"><i class="fa fa-heart"></i></a>
                </p>
                <!--<p class="video-description">handler has just finished his Graphic Design degree and enjoys continuing to learn from Monica and building his experience. Joey and Phoebe focus on bringing new business to the company. They have won a number of big clients recently and both also have qualifications in project management to ensure that the projects run smoothly from start to finish.</p>-->
                <div class="row buttons-margin-horizontal">
                    <div class="col-md-6 button-full">
                        <a class="btn btn-theme btn-red"><i class="fa fa-heart"></i> Like</a>
                    </div>
                    <div class="col-md-6 button-full">
                        <a class="btn btn-theme btn-orange"><i class="fa fa-plus"></i> Collect</a>
                    </div>
                </div>
                <p class="button-full buttons-margin-horizontal"><a class="btn btn-theme btn-green"><i class="fa fa-download"></i> Download the video</a></p>
                <div class="blue-box video-social">
                    <div class="row">
                        <div class="col-md-5">
                            <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FKL-Webmedia%2F131260293670757&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21&amp;appId=188835154460780" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
                        </div>
                        <div class="col-md-3">
                            <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://platform.twitter.com/widgets/tweet_button.html#count=none&amp;url=https%3A%2F%2F.twitter.com%2FKLWebmedia" data-twttr-rendered="true" style="width: 58px; height: 20px;"></iframe>
                        </div>
                        <div class="col-md-2">
                            <iframe src="https://plusone.google.com/_/+1/fastbutton?bsv&amp;size=medium&amp;hl=en-US&amp;url=https://plus.google.com/113174627408639682462/&amp;parent=https://plus.google.com/113174627408639682462/&amp;annotation=none" allowtransparency="true" frameborder="0" scrolling="no" title="+1"></iframe>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

@endsection