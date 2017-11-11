@extends('layout')

@section('content')

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
        <div class='col-md-2'>
            名稱
        </div>
        <div class='col-md-8'>
            社群簡介
        </div>
        <div class='col-md-2'>
            網址
        </div>
    </div>
    @foreach($rows as $row)
    <div class='row item-box'>
        <div class='col-md-2'>
            <div class='title'>{{ $row[0] }}</div>
        </div>
        <div class='col-md-8'>
            {!! ($row[1]) !!}
        </div>
        <div class='col-md-2'>
            <a href='{{$row[2]}}'>網址</a>
        </div>
    </div>
    @endforeach
</div>

@endsection
