@extends('layout')

@section('content')

<div class="container">

    <div class='row'>
        <div class='col-md-12'>
            <h2 style='color: #009688; color: #00BCD4;'>做網站：有哪些架站服務</h2>

            <p style='color: #757575;'>
                找看看有沒有適合的架站服務吧！
            </p>

        </div>
    </div>
</div>

<br>

<div class='container'>

    <div class='row item-box -header'>
        <div class='col-md-1'>
            name
        </div>
        <div class='col-md-2'>
            url
        </div>
        <div class='col-md-1'>
            feature
        </div>
        <div class='col-md-4'>
            description
        </div>
        <div class='col-md-4'>
            pricing
        </div>
    </div>
    @foreach($rows as $row)
    <div class='row item-box'>
        <div class='col-md-1'>
            <div class='title'>{{ $row[0] }}</div>
        </div>
        <div class='col-md-2'>
            {!! ($row[1]) !!}
            <div class='visible-xs-block'>
                <hr class='mobile-hr'>
            </div>
        </div>
        <div class='col-md-1'>
            {!! ($row[2]) !!}
        </div>
        <div class='col-md-4'>
            {{ $row[3] }}
        </div>
        <div class='col-md-4'>
            {{ $row[4] }}
        </div>
    </div>
    @endforeach
</div>

@endsection
