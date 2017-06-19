@extends('layout')

@section('content')

<div class="main-section">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <i class="fa fa-handshake-o" aria-hidden="true"></i>
                發佈案件
                <div style='float: right;'>
                <a href='https://docs.google.com/forms/d/e/1FAIpQLSdSLKBkXRiFm8WE-mA7rQO1tLUPof_m_1oytI8sMKlTmfEi5w/viewform?usp=sf_link' target='_blank' class="btn btn-success">張貼案件</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <p>還沒有人張貼案件。</p>
                </center>
            </div>
        </div>
    </div>

</div>

@endsection
