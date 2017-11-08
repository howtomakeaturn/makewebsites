@extends('layout')

@section('head')

<link rel="stylesheet" href="/css/tachyons.min.css">

<style>
    .fs-21 {
        font-size: 21px;
    }
</style>

@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mt6 mb6 tc lh-copy">
                <div style='font-size: 48px;'>您有做網站的需求嗎？</div>
                <div style='font-size: 36px;'>避免花冤枉錢，建議您按照以下步驟挑選服務/廠商</div>
            </div>
        </div>
    </div>

    <div class="row tc">
        <div class="col-md-3">
            <div class="fs-21 mb4">
            1. 先看看架站服務有沒有適合的
            </div>
            <div style='height: 100px;'>
            接案公司的收費幾乎一定比你想像的還要高很多。在很多情況下，其實租用架站平台的服務是比較好的選擇。
            </div>
            <a href='#' class="btn btn-default btn-lg btn-block mt5">看看有哪些架站服務</a>
        </div>
        <div class="col-md-3">
            <div class="fs-21 mb4">
            2. 看看接案公司有哪些，找喜歡的跟他們要個報價
            </div>
            <div style='height: 100px;'>
            每一間接案公司的強項、特色都不同。貨比三家不吃虧，逛逛每個團隊的作品集，找一間喜歡的公司，跟他們要個報價。
            </div>
            <a href='#' class="btn btn-default btn-lg btn-block mt5">看看有哪些接案公司</a>
        </div>
        <div class="col-md-3">
            <div class="fs-21 mb4">
            3. 了解為甚麼報價會差那麼多，方便跟接案公司溝通
            </div>
            <div style='height: 100px;'>
            不同接案公司的報價價差非常巨大，這是因為各種功能可大可小，取決於豐富、完整到什麼程度。
            </div>
            <a href='#' class="btn btn-default btn-lg btn-block mt5">了解一下報價的價差</a>
        </div>
        <div class="col-md-3">
            <div class="fs-21 mb4">
            4. 還有其他問題，可以到討論區詢問
            </div>
            <div style='height: 100px;'>
            還是有地方不了解的話，可以到社群發問，尋找其他人士的協助。
            </div>
            <a href='#' class="btn btn-default btn-lg btn-block mt5">前往 Facebook 社團討論</a>
        </div>
    </div>

</div>

@endsection
