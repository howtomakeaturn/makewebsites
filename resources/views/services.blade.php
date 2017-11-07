@extends('layout')

@section('content')

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
