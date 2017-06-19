@extends('layout')

@section('content')

<div class="main-section">
    <div class="site-title">做網站要多少錢？</div>
    <div class="site-slogan">同樣是做網站，為什麼不同廠商的報價差這麼多？</div>
    <div class="menu-buttons">
        <a class="btn btn-primary">
            <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
            了解報價的差異
        </a>
        <a class="btn btn-primary">
            <i class="fa fa-user-o" aria-hidden="true"></i>
            尋找接案者
        </a>
        <a class="btn btn-primary">
            <i class="fa fa-handshake-o" aria-hidden="true"></i>
            發佈案件
        </a>
    </div>


</div>

<style>
    body {
        font-size: 15px;
        line-height: 1.7em;
    }
    .main-section {
        padding-top: 40px;
        padding-bottom: 40px;
    }
    .site-title {
        font-size: 3em;
        text-align: center;
        margin-bottom: 30px;
    }
    .site-slogan {
        font-size: 1.8em;
        text-align: center;
    }
    .menu-buttons {
        text-align: center;
        padding-top: 40px;
    }
    .menu-buttons .btn {
        padding: 20px 40px;
        font-size: 1.5em;
    }
</style>
@endsection
