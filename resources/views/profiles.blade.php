@extends('layout')

@section('content')

<div class="container">

    <div class='row'>
        <div class='col-md-12'>
            <h2 style='color: #009688; color: #00BCD4;'>做網站：有哪些接案公司</h2>

            <p style='color: #757575;'>
                找喜歡的跟他們要個報價吧！
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
        <div class='col-md-8'>
            description
        </div>
        <div class='col-md-1'>
            city
        </div>
        <div class='col-md-1'>
            url
        </div>
    </div>
    @foreach($rows as $row)
    <div class='row item-box'>
        <div class='col-md-2'>
            <div class='title'>{{ $row[0] }}</div>
        </div>
        <div class='col-md-8'>
            {!! ($row[2]) !!}
        </div>
        <div class='col-md-1'>
            {!! ($row[3]) !!}
        </div>
        <div class='col-md-1'>
            <a href='{{$row[1]}}'>網址</a>
        </div>
    </div>
    @endforeach
</div>

@endsection
