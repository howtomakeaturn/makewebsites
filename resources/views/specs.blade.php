@extends('layout')

@section('content')

<div class="main-section -blue">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                了解報價的差異
                <div style='float: right;'>
                <a href='/specs' class="btn btn-success">新增條目</a>
                </div>
            </div>
        </div>
    </div>


    @include('_specs')

</div>

@endsection
