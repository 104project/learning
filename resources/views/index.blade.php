<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Learning - @yield('title')</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS Files -->
    <link rel="stylesheet" href="/plugin/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/plugin/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/style.css"/>
    <link rel="stylesheet" href="/plugin/animate.min.css" />

@yield('css_link')

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<header class="main">
    <div class="container">
        @include('layout.partial.navigation')
    </div>
</header>

<section class="slider-full-width">
    <div id="carousel-full" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-full" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-full" data-slide-to="1"></li>
            <li data-target="#carousel-full" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/slider_s1b.jpg" alt="" />
                <div class="container">
                    <div class="carousel-caption">
                        <p class="header animated" data-animation="fadeInUp" data-animation-delay="0.2s"><strong>Learning</strong> online from everywhere via <strong>web</strong></p>
                        <p class="header header-small animated" data-animation="fadeInUp" data-animation-delay="0.8s">Watch  over <strong>12 000</strong> different tutorials about<br />everything you ever want to know</p>
                        <p class="buttons animated" data-animation="fadeIn" data-animation-delay="1.6s">
                            <a href="plans.htm" class="btn btn-theme btn-orange">Get started</a>
                            <a href="video.htm" class="btn btn-theme btn-green"><i class="fa fa-play"></i> Watch video</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/slider_s2b.jpg" alt="" />
                <div class="container">
                    <div class="carousel-caption">
                        <p class="header animated" data-animation="fadeInUp" data-animation-delay="0.2s"><strong>Remote</strong> desktop controll from <strong>everywhere</strong></p>
                        <p class="header header-small animated" data-animation="fadeInUp" data-animation-delay="0.8s">About <strong>12 000</strong> interpreneurs from<br />over <strong>50</strong> countries are using it</p>
                        <p class="buttons animated" data-animation="fadeIn" data-animation-delay="1.6s">
                            <a href="plans.htm" class="btn btn-theme btn-orange">Get started</a>
                            <a href="plans.htm" class="btn btn-theme btn-green"><i class="fa fa-play"></i> See pricing</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/slider_s3b.jpg" alt="" />
                <div class="container">
                    <div class="carousel-caption">
                        <p class="header text-right animated" data-animation="fadeInUp" data-animation-delay="0.2s"><strong>Stay tuned</strong> and get watch our <strong>videos</strong></p>
                        <p class="header header-small text-right animated" data-animation="fadeInUp" data-animation-delay="0.8s">About <strong>12 000</strong> interpreneurs from<br />over <strong>50</strong> countries are using it</p>
                        <p class="buttons text-right animated" data-animation="fadeIn" data-animation-delay="1.6s">
                            <a href="plans.htm" class="btn btn-theme btn-orange">Start today</a>
                            <a href="video.htm" class="btn btn-theme btn-green"><i class="fa fa-play"></i> See video</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-full" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-full" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</section>

<section class="content content-light">
    <div class="container">
        <p class="header text-center"><strong>How easy</strong> our teachers manage their <strong>business</strong></p>
        <p class="text-center">We believe that analysis of your company and your customers is key in responding effectively to your promotional needs and we will work with you to fully understand your business.</p>

        <hr class="invisible" />
        <hr class="invisible" />

        <!-- Profil create stage - dotted -->
        <div class="row profil-create-stage" id="create-stage-toggle">
            <div class="col-md-3 stage-first active">
                <a href="#tab-register" data-toggle="tab">
                    <i class="fa fa-sign-in fa-4x"></i> <!-- OR fa-user -->
                    <span>Register as teacher</span>
                    <span class="stage-dot"></span>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#tab-upload" data-toggle="tab">
                    <i class="fa fa-upload fa-4x"></i> <!-- OR fa-cloud-upload -->
                    <span>Upload a video</span>
                    <span class="stage-dot"></span>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#tab-customize" data-toggle="tab">
                    <i class="fa fa-pencil-square-o fa-4x"></i> <!-- OR fa-cogs -->
                    <span>Customize your page</span>
                    <span class="stage-dot"></span>
                </a>
            </div>
            <div class="col-md-3 stage-last">
                <a href="#tab-play" data-toggle="tab">
                    <i class="fa fa-play-circle fa-4x"></i> <!-- OR fa-youtube-play OR fa-play-circle-o -->
                    <span>Lets play your tut</span>
                    <span class="stage-dot"></span>
                </a>
            </div>
        </div>

        <hr class="invisible" />
        <hr class="invisible" />

        <div class="tab-content">
            <div id="tab-register" class="tab-pane fade in active">
                <p class="header text-center"><strong>What</strong> our team can do <strong>for you!</strong></p>
                <p class="text-center">We believe that analysis of your company and your customers is key in responding effectively to your promotional needs and we will work with you to fully understand your business.</p>
            </div>
            <div id="tab-upload" class="tab-pane fade">
                <p class="header text-center"><strong>Lorem</strong> ipsum dolor sit <strong>amet enim</strong></p>
                <p class="text-center">Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna.</p>
            </div>
            <div id="tab-customize" class="tab-pane fade">
                <p class="header text-center"><strong>Vestibulum</strong> commodo volutpat a <strong> convallis ac</strong></p>
                <p class="text-center">Phasellus fermentum in, dolor. Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit, rhoncus eu, luctus et interdum adipiscing wisi.</p>
            </div>
            <div id="tab-play" class="tab-pane fade">
                <p class="header text-center"><strong>Aliquam</strong> erat ac ipsum <strong>aliquam purus</strong></p>
                <p class="text-center">Quisque lorem tortor fringilla sed, vestibulum id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non, consectetuer lobortis quis, varius in, purus.</p>
            </div>
        </div>

        <hr class="invisible" />
        <hr class="invisible" />
        <hr class="invisible" />
        <hr class="invisible" />

        <!-- Small boxes with text - 3 box in row -->
        <div class="row multi-box-row">
            <div class="col-md-4">
                <h3><i class="fa fa-compass fa-2x pull-left text-green"></i> Finding a path</h3>
                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col-md-4">
                <h3><i class="fa fa-cloud fa-2x pull-left text-green"></i> Easy cloud</h3>
                <p>We believe that analysis of your company and your customers is key in responding effectively to your promo- tional needs and we will work with you.</p>
            </div>
            <div class="col-md-4">
                <h3><i class="fa fa-cogs fa-2x pull-left text-green"></i> Useroptions</h3>
                <p>We have a number of different teams in our agency that specialise in different areas of business so you can be sure that you won't receive a generic service.</p>
            </div>
        </div>
        <!-- Small boxes with text - 3 box in row -->
        <div class="row multi-box-row">
            <div class="col-md-4">
                <h3><i class="fa fa-check-circle-o fa-2x pull-left text-green"></i> Taskbar filter</h3>
                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col-md-4">
                <h3><i class="fa fa-clipboard fa-2x pull-left text-green"></i> Smart managing</h3>
                <p>We believe that analysis of your company and your customers is key in responding effectively to your promo- tional needs and we will work with you.</p>
            </div>
            <div class="col-md-4">
                <h3><i class="fa fa-map-marker fa-2x pull-left text-green"></i> Find locations</h3>
                <p>We have a number of different teams in our agency that specialise in different areas of business so you can be sure that you won't receive a generic service.</p>
            </div>
        </div>
    </div>
</section>

<section class="content content-dark">
    <div class="container">
        <p class="header text-white">Some <strong>important facts</strong> about the company</p>

        <!-- Reel - number rotator -->
        <div class="row number-rotator">
            <div class="col-md-3">
                <span class="number">22<span class="separator"></span></span>
                <p class="text-white">create teacher</p>
            </div>
            <div class="col-md-3">
                <span class="number">45<span class="separator"></span></span>
                <p class="text-white">different categories</p>
            </div>
            <div class="col-md-3">
                <span class="number">98<span class="separator"></span></span>
                <p class="text-white">tutorials served</p>
            </div>
            <div class="col-md-3">
                <span class="number">13<span class="separator"></span></span>
                <p class="text-white">social networks</p>
            </div>
        </div>

        <a href="register.htm" class="btn btn-theme btn-green">Become a part</a>
    </div>
</section>

<section class="content content-light">
    <div class="container">
        <p class="text-center header">Those <strong>happy clients</strong> work with us</p>
        <p class="text-center">We believe that analysis of your company and your customers is key in responding effectively to your promotional needs and we will work with you to fully understand your business.</p>

        <hr class="invisible" />
        <hr class="invisible" />

        <!-- Client Logos -->
        <div class="row text-center client-logos">
            <div class="col-md-3">
                <a href="#">
                    <img src="img/logo-bw.gif" alt="" />
                    <img src="img/logo-color.gif" class="color" alt="" />
                </a>
            </div>
            <div class="col-md-3">
                <a href="#">
                    <img src="img/logo-bw.gif" alt="" />
                    <img src="img/logo-color.gif" class="color" alt="" />
                </a>
            </div>
            <div class="col-md-3">
                <a href="#">
                    <img src="img/logo-bw.gif" alt="" />
                    <img src="img/logo-color.gif" class="color" alt="" />
                </a>
            </div>
            <div class="col-md-3">
                <a href="#">
                    <img src="img/logo-bw.gif" alt="" />
                    <img src="img/logo-color.gif" class="color" alt="" />
                </a>
            </div>
        </div>
        <div class="row text-center client-logos">
            <div class="col-md-3">
                <a href="#">
                    <img src="img/logo-bw.gif" alt="" />
                    <img src="img/logo-color.gif" class="color" alt="" />
                </a>
            </div>
            <div class="col-md-3">
                <a href="#">
                    <img src="img/logo-bw.gif" alt="" />
                    <img src="img/logo-color.gif" class="color" alt="" />
                </a>
            </div>
            <div class="col-md-3">
                <a href="#">
                    <img src="img/logo-bw.gif" alt="" />
                    <img src="img/logo-color.gif" class="color" alt="" />
                </a>
            </div>
            <div class="col-md-3">
                <a href="#">
                    <img src="img/logo-bw.gif" alt="" />
                    <img src="img/logo-color.gif" class="color" alt="" />
                </a>
            </div>
        </div>
    </div>
</section>



@include('layout.partial.footer')

    <!-- JavaScript Files -->
    <script src="/plugin/jquery-1.10.2.min.js"></script>
    <script src="/plugin/bootstrap/js/bootstrap.min.js"></script>
    <script src="/plugin/jquery.cuteTime.min.js"></script>
    <script src="/script/script.js"></script>
    <!-- / JavaScript Files -->

    <script src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/prettify/prettify.js"></script>
    <script src="https://cdn.bootcss.com/prettify/r298/run_prettify.js"></script>
    <script src="/js/layout.js"></script>
</body>
</html>