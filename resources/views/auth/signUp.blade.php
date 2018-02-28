@extends('layout.master')

@section('title', $title)

@section('content')

    <div class="container">



        <div class="row">
            <div class="col-md-12">
                <form action="/user/auth/sign-up" method="post">
                    <div class="form-group">
                        <label for="nickname">暱稱</label>
                        <input type="text"
                               class="form-control"
                               id="nickname"
                               name="nickname"
                               placeholder="暱稱"
                               value="暱稱"
                        >
                    </div>
                    <div class="form-group">
                        <label for="email">信箱</label>
                        <input type="text"
                               class="form-control"
                               id="email"
                               name="email"
                               placeholder="信箱"
                               value="信箱"
                        >
                    </div>
                    <div class="form-group">
                        <label for="password">密碼</label>
                        <input type="password"
                               class="form-control"
                               id="password"
                               name="password"
                               placeholder="密碼"
                        >
                    </div>
                    <div class="form-group">
                        <label for="password">確認密碼</label>
                        <input type="password"
                               class="form-control"
                               id="password"
                               name="password_confirmation"
                               placeholder="確認密碼"
                        >
                    </div>

                    <button type="submit" class="btn btn-success">註冊</button>

                    {{-- CSRF 欄位--}}
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>

@endsection