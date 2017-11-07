@extends('layout')

@section('content')

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
