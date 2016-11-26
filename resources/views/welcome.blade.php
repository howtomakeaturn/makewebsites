@extends('layout')

@section('content')

<div class='container'>

    <div class='row'>
        <div class='col-md-12'>
            <h2>做網站要多少錢</h2>
            <p>
                關於做網站的各種功能與價格說明清單
                <i class="fa fa-dollar" aria-hidden="true"></i>
                <i class="fa fa-dollar" aria-hidden="true"></i>
                <i class="fa fa-dollar" aria-hidden="true"></i>
            </p>
        </div>
    </div>
    <br>
    @foreach($rows as $row)
    <div class='row item-box'>
        <div class='col-md-1'>
            {{ $row[0] }}
        </div>
        <div class='col-md-4'>
            {!! nl2br($row[1]) !!}
        </div>
        <div class='col-md-4'>
            {!! nl2br($row[2]) !!}
        </div>
        <div class='col-md-1'>
            {{ $row[3] }}
        </div>
        <div class='col-md-1'>
            {{ $row[4] }}
        </div>
        <div class='col-md-1'>
            {{ $row[5] }}
        </div>
    </div>
    @endforeach
    <br>
    <br>
    <br>
</div>

<style>
    body {
        font-size: 15px;
        line-height: 1.7;
    }

    .item-box {
        border-bottom: 1px solid #E0E0E0;
        padding-bottom: 10px;
        padding-top: 10px;
    }

    .item-box:nth-child(odd) {
        background-color: #EEEEEE;
    }

</style>
@endsection
