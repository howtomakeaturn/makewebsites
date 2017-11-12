@extends('layout')

@section('content')

<div class="container">

    <div class='row'>
        <div class='col-md-8 col-md-offset-2'>

            <div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>資料持續整理中</strong>：<a href='https://docs.google.com/forms/d/e/1FAIpQLSdl5tF1mEScfHwJijvLnjjwcQFm48jmGm16lu6YOeIlXv5pMg/viewform?usp=sf_link' target="_blank">點這裡推薦新增社群</a>
            </div>

            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>上次更新資料時間</strong>：2017-11-12 14:35</a>
            </div>

        </div>
    </div>
</div>

<div class="container">

    <div class='row'>
        <div class='col-md-12'>
            <div class="header-box">
                <h2 class="title">社群討論</h2>
                <p class="description">
                    還是有地方不了解的話，可以到社群發問，尋找其他人士的協助。
                </p>
            </div>
        </div>
    </div>
</div>

<br>

<div class='container'>

    <div class='row item-box -header'>
        <div class='col-md-3'>
            名稱
        </div>
        <div class='col-md-7'>
            社群簡介
        </div>
        <div class='col-md-2'>
            網址
        </div>
    </div>
    @foreach($rows as $row)
    <div class='row item-box'>
        <div class='col-md-3'>
            <div class='title'>{{ $row[0] }}</div>
        </div>
        <div class='col-md-7'>
            {!! ($row[1]) !!}
        </div>
        <div class='col-md-2'>
            <a href='{{$row[2]}}'>網址</a>
        </div>
    </div>
    @endforeach
</div>

@endsection
