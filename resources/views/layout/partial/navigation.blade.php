<nav class="navbar" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" style="font-family:Microsoft YaHei;padding: 12px 0px; margin-right:15px;font-size: 30px; color: #26abe2;" href="/">教育訓練平台</a>
        <div class="navbar-right menu-main">
        <ul class="nav navbar-nav">


            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>精選頻道</span> <b class="caret"></b></a>
                <ul class="dropdown-menu">

                    <li><a href="/video/index">所有影片</a></li>

                    @foreach($Videos_Category as $videocategory)
                        <li><a href="/video/index/{{ $videocategory->tag }}">{{ $videocategory->tag }}</a></li>

                    @endforeach

                </ul>
            </li>
            <li><a href="/test"><span>教學案例</span></a></li>

            <li><a href="contact.htm"><span>聯絡我們</span></a></li>
        </ul>
        </div>
    </div>
    <div class="collapse navbar-collapse">
        <div class="navbar-right menu-main">
            <ul class="nav navbar-nav">

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