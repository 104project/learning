<nav class="navbar" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.htm"><img id="logo" src="/img/logo.png" alt="eLearn" /></a>
    </div>
    <div class="collapse navbar-collapse">
        <div class="navbar-right menu-main">
            <ul class="nav navbar-nav">
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>首頁</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.php">Home, version 1</a></li>
                        <li><a href="index2.htm">Home, version 2</a></li>
                        <li><a href="index3.htm">Home, version 3</a></li><li><a href="http://www.cssmoban.com/">Home, version 4</a></li>
                    </ul>
                </li>
                <li><a href="about-us.htm"><span>關於我們</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>教學影片</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="categories.htm">Categories of video</a></li>
                        <li><a href="videos-list.htm">Video list</a></li>
                        <li><a href="/test2">Video list (grid)</a></li>
                        <li><a href="video.htm">Video film detail</a></li>
                    </ul>
                </li>
                <li><a href="/test"><span>教學案例</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>部落格</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="blog-list.htm">Blog list</a></li>
                        <li><a href="blog-post.htm">Blog post detail</a></li>
                    </ul>
                </li>
                <li><a href="contact.htm"><span>Contact us</span></a></li>
                @if(session()->has('user_id'))
                    <li class="dropdown" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #26abe2;"><span>Hi， {{ session('user_nickname')}}</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">

                            <li><a href="blog-post.htm">喜愛影片</a></li>
                            <li><a href="blog-post.htm">檢視收藏</a></li>
                            <li><a href="/user/auth/sign-out">登出</a></li>
                        </ul>
                    </li>
                @else
                    <a style="margin: 10px; font-weight: 500;" class="btn btn-default" href="/user/auth/sign-up">註冊</a>
                    <a style="font-weight: 500;" class="btn btn-orange" href="/user/auth/sign-in">登入</a>
                @endif

            </ul>





        </div>
    </div>
</nav>