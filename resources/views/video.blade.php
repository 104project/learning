@extends('layout.master')

@section('title', $title)

@section('content')

<!-- Video: film view -->
<section class="content content-light  video-film" >
    <div class="container">
    @foreach($Video as $video)
        <!-- Video film view - center -->
        <div class="row" style="margin: 0 auto;">
            <div class="col-md-8">

                <article>
                    <!-- Video film - player -->
                    <div  style="margin:0 auto;overflow:hidden;">

                        <iframe  style="border-radius: 16px; margin:0 auto;" width="700" height="400"  src="https://www.youtube.com/embed/{{ $video->video_id }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>

                        </iframe>

                    </div>

                    <div class="video-content">
                        <p>{{ $video->content }}</p>
                    </div>

                    <hr class="invisible" />
                    <hr class="invisible" />

                    <!-- Video - related -->
                    <section class="related">
                        @if(count($SimilarVideos)>0)
                        <h2 style="font-family: 微軟正黑體; font-weight: bold;">-- 類似的教學影片 --</h2>
                        @endif

                        <div class="row  videos-list" style="display: flex;flex-wrap: wrap; ">
                            @foreach($SimilarVideos as $similarVideos)
                            <article class="col-md-6  video-item">
                                <a href="/video/{{ $similarVideos->category }}/{{ $similarVideos->id }}" class="video-prev video-prev-small">
                                <img  width="100%" height="100%" src='http://img.youtube.com/vi/{{ $similarVideos->video_id }}/maxresdefault.jpg'>
                                </a>
                                <h3 class="video-title" style="font-family: 微軟正黑體; height: 13%;"><a href="/test3"> {{ $similarVideos->title }}</a></h3>

                                <p class="button-full"><a  href="/video/{{ $similarVideos->category  }}/{{ $similarVideos->id }}" class="btn btn-theme btn-green" style="background-color: #006dcc;     font-size: 18px;"><i class="fa fa-arrow-circle-right"></i> 立即前往</a></p>
                            </article>
                            @endforeach
                        </div>


                    </section>
                </article>

            </div>
            <aside class="col-md-4" >

                <p class="video-params">
                    Author： <b>J{{ $video->author }}</b> <br />
                    Date： <b>{{ $video->updated_at	 }}</b> <br />
                    Category： <b>{{ $video->category	 }}</b> <br />
                    Views： <b>{{ $video->views_num }}</b> <br />
                    Likes： <b>{{ $video->likes_num	 }}</b>
                </p>
                <!--<p class="video-description">handler has just finished his Graphic Design degree and enjoys continuing to learn from Monica and building his experience. Joey and Phoebe focus on bringing new business to the company. They have won a number of big clients recently and both also have qualifications in project management to ensure that the projects run smoothly from start to finish.</p>-->
                <div class="row buttons-margin-horizontal">
                    <div class="col-md-6 button-full">
                        <a class="btn btn-theme btn-red" href="/video/{{$video->id}}/like"><i class="fa fa-heart"></i> Like</a>
                    </div>
                    <div class="col-md-6 button-full">
                        <a class="btn btn-theme btn-orange"><i class="fa fa-plus"></i> Collect</a>
                    </div>
                </div>
                <p class="button-full buttons-margin-horizontal" ><a href="/video/index" class="btn btn-theme btn-green"><i class="fa fa-arrow-circle-left"></i> 返回</a></p>

            </aside>
        </div>
        @endforeach
    </div>
</section>

@endsection