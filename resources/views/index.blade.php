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

<div class="main-section -blue">
    <div class="section-title">
        <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
        了解報價的差異
    </div>

    @include('_specs', ['rows' => $rows->shuffle()->take(4)])

    <br>
    <div style='text-align: center;'>
        <a href='/specs' class="btn btn-primary">查看全部 {{$rows->count()}} 則條目</a>
        <a href='/specs' class="btn btn-success">新增條目</a>
    </div>

</div>

<div class="main-section">
    <div class="section-title">
        <i class="fa fa-user-o" aria-hidden="true"></i>
        尋找接案者
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://docs.google.com/spreadsheets/d/1XGbYp7YkMN_0PTz-h99mADWOp8xTsUq50-xOxVLJfJU/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
            </div>
        </div>
    </div>
</div>

<div class="main-section -blue">
    <div class="section-title">
        <i class="fa fa-handshake-o" aria-hidden="true"></i>
        發佈案件
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://docs.google.com/spreadsheets/d/1XGbYp7YkMN_0PTz-h99mADWOp8xTsUq50-xOxVLJfJU/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
            </div>
        </div>
    </div>
</div>

@endsection
