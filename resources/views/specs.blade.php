@extends('layout')

@section('content')

<div class="main-section -blue">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                了解報價的差異
                <div style='float: right;'>
                <a href='https://docs.google.com/forms/d/e/1FAIpQLSd9s12zzgK4M2jN2PxdqbpySOkpUvoz5vW8WUJDnJRs08t-sQ/viewform?usp=sf_link' target="_blank" class="btn btn-success">新增條目</a>
                </div>
            </div>
        </div>
    </div>


    @include('_specs')

</div>

@endsection
