@extends('layout')

@section('content')

<div class='container'>

    <div class='row item-box -header'>
        <div class='col-md-1'>
            名詞
        </div>
        <div class='col-md-10'>
            說明
        </div>
        <div class='col-md-1'>
            說明人
        </div>
    </div>
    @foreach($rows as $row)
    <div class='row item-box'>
        <div class='col-md-1'>
            <div class='title'>
            {{ $row[0] }}
            </div>
        </div>
        <div class='col-md-10'>
            {!! ($row[1]) !!}
        </div>
        <div class='col-md-1'>
            {{ $row[2] }}
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
        line-height: 1.7em;
    }

    .item-box {
        border-bottom: 1px solid #B2DFDB;
        padding-bottom: 10px;
        padding-top: 10px;
    }

    .item-box:nth-child(even) {
        background-color: #E0F2F1;
    }

    .item-box.-header {
        background-color: #009688;
        color: white;
    }

    .item-box .title {
        font-weight: bold;
    }

    .mobile-hr {
        margin-top: 10px;
        margin-bottom: 10px;
        border-color: #BDBDBD;
        border-style: dashed;
        border-top-width: 2px;
    }

</style>
@endsection
