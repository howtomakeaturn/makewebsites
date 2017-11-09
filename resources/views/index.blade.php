@extends('layout')

@section('head')

<style>

    .greeting-box {
        text-align: center;
        margin-top: 60px;
        margin-bottom: 80px;
    }

    .greeting-box .main {
        font-size: 48px;
    }

    .greeting-box .description {
        font-size: 36px;
    }

    .card {
        border: 1px solid #E0E0E0;
        border-radius: 5px;
        padding: 20px;
    }

    .step-box {

    }

    .step-box .title {
        min-height: 80px;
        font-weight: bold;
        font-size: 18px;
    }

    .step-box .description {
        min-height: 220px;
    }

    .step-box a {

    }

</style>

@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="greeting-box">
                <div class="main">您有做網站的需求嗎？</div>
                <div class="description">避免花冤枉錢，建議您按照以下步驟挑選服務或廠商</div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="step-box card">
                <div class="title">
                1. 先看看架站服務有沒有適合的
                </div>
                <div class="description">
                    <p>接案公司的收費幾乎一定比你想像的還要高很多。在很多情況下，其實租用架站平台的服務是比較好的選擇。</p>
                    <p>獨立網址、手機版型…這些常見需求，雲端服務都有考慮進去，不用擔心。</p>
                </div>
                <a href='/services' class="btn btn-default btn-block">
                    看看有哪些架站服務
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="step-box card">
                <div class="title">
                2. 看看接案公司有哪些，找喜歡的跟他們要個報價
                </div>
                <div class="description">
                    <p>每一間接案公司的強項、特色都不同。貨比三家不吃虧，逛逛每個團隊的作品集，找一間喜歡的公司，跟他們要個報價。</p>
                </div>
                <a href='/profiles' class="btn btn-default btn-block">
                    看看有哪些接案公司
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="step-box card">
                <div class="title">
                3. 了解為甚麼報價會差那麼多，方便跟接案公司溝通
                </div>
                <div class="description">
                    <p>不同接案公司的報價價差非常巨大，這是因為各種功能可大可小，取決於豐富、完整到什麼程度。</p>
                </div>
                <a href='/prices' class="btn btn-default btn-block">
                    了解一下報價的價差
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="step-box card">
                <div class="title">
                4. 還有其他問題，可以到討論區詢問
                </div>
                <div class="description">
                    <p>還是有地方不了解的話，可以到社群發問，尋找其他人士的協助。</p>
                </div>
                <a href='#' class="btn btn-default btn-block">
                    前往 Facebook 社團
                </a>
            </div>
        </div>
    </div>

</div>

@endsection
