@extends('layout')

@section('content')

<div class="container">

    <div class='row'>
        <div class='col-md-12'>
            <h2 style='color: #009688; color: #00BCD4;'>做網站：有哪些接案公司？</h2>
            <p style='color: #757575;'>
                關於做網站的各種功能與價格說明清單
                <i class="fa fa-dollar" aria-hidden="true"></i>
                <i class="fa fa-dollar" aria-hidden="true"></i>
                <i class="fa fa-dollar" aria-hidden="true"></i>
            </p>
        </div>
    </div>
</div>

<br>

<div class='container'>

    <div class='row item-box -header'>
        <div class='col-md-2'>
            name
        </div>
        <div class='col-md-4'>
            url
        </div>
        <div class='col-md-4'>
            description
        </div>
    </div>
    @foreach($rows as $row)
    <div class='row item-box'>
        <div class='col-md-2'>
            <div class='title'>{{ $row[0] }}</div>
        </div>
        <div class='col-md-4'>
            {!! ($row[1]) !!}
            <div class='visible-xs-block'>
                <hr class='mobile-hr'>
            </div>
        </div>
        <div class='col-md-4'>
            {!! ($row[2]) !!}
        </div>
    </div>
    @endforeach
</div>

@endsection
