@extends('layout')

@section('head')

<style>

    .greeting-box {
        text-align: center;
        margin-top: 20px;
        margin-bottom: 40px;
    }

    .greeting-box .main {
        font-size: 1.6rem;
        margin-bottom: 0.4rem;
    }

    .greeting-box .description {
        font-size: 1rem;
    }

    @media (min-width: 768px) {
        .greeting-box {
            margin-top: 25px;
            margin-bottom: 55px;
        }
        .greeting-box .main {
            font-size: 2.5rem;
        }
        .greeting-box .description {
            font-size: 1.5rem;
        }
    }


    .card {
        border: 1px solid #E0E0E0;
        border-radius: 2px;
        padding: 20px;
        background: #fff;
        border-radius: 2px;
        box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
    }

    .step-box {
        margin-bottom: 15px;
    }

    .number-box {
        text-align: center;
        display: none;
    }

    .number {
        background: #E0E0E0;
        color: white;
        display: inline-block;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        line-height: 30px;
        font-size: 18px;
        font-weight: bold;
    }

    .step-box .title {
        font-weight: bold;
        font-size: 1.33rem;
        text-align: center;
        margin-top: 10px;
    }

    .step-box .subtitle {
        text-align: center;
        font-size: 1rem;
        color: #757575;
        margin-bottom: 15px;
    }

    .step-box .description {
        min-height: 220px;
        font-size: 1rem;
        display: none;
    }

    .step-box a {

    }

    .bg {
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .bg > .title {
        text-align: center;
        font-size: 1.33rem;
        margin-bottom: 15px;
    }

    .bg.-grey {
        background: #F5F5F5;
    }

    .bg .description-box {
        text-align: center;
        font-size: 1rem;
        color: #616161;
    }

    @media (min-width: 768px) {
        .bg {
            padding-top: 60px;
            padding-bottom: 80px;
        }
        .bg > .title {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 30px;
        }
    }

</style>

@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="greeting-box">
                <div class="main">您有做網站的需求嗎？</div>
                <div class="description">參考以下的發案指南，找到適合您的服務與廠商</div>
            </div>
        </div>
    </div>
</div>

<div class="bg -grey">

    <div class="title">
        多做功課，不會吃虧。
    </div>

<div class="container">

    <div class="row">
        <div class="col-md-3">
            <div class="step-box card">
                <div class="number-box">
                    <span class="number">1</span>
                </div>
                <div class="title">
                    架站服務
                </div>
                <div class="subtitle">
                    看看有沒有適合的
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
                <div class="number-box">
                    <span class="number">2</span>
                </div>
                <div class="title">
                    接案公司
                </div>
                <div class="subtitle">
                    找喜歡的跟他們要個報價
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
                <div class="number-box">
                    <span class="number">3</span>
                </div>
                <div class="title">
                    認識報價
                </div>
                <div class="subtitle">
                    方便跟接案公司溝通
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
                <div class="number-box">
                    <span class="number">4</span>
                </div>
                <div class="title">
                    社群討論
                </div>
                <div class="subtitle">
                    不懂的話可以請教社群
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

</div>

<div class="bg">
    <div class="title">
        架站服務
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="description-box">
                    <p>接案公司的收費幾乎一定比你想像的還要高很多。</p>
                    <p>在很多情況下，其實租用架站平台的服務是比較好的選擇。</p>
                    <p>獨立網址、手機版型…這些常見需求，雲端服務都有考慮進去，不用擔心。</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg -grey">
    <div class="title">
        接案公司
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="description-box">
                    <p>每一間接案公司的強項、特色都不同。</p>
                    <p>貨比三家不吃虧，逛逛每個團隊的作品集，找一間喜歡的公司，跟他們要個報價。</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg">
    <div class="title">
        認識報價
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="description-box">
                    <p>不同接案公司的報價價差非常巨大</p>
                    <p>這是因為各種功能可大可小，取決於豐富、完整到什麼程度。</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg -grey">
    <div class="title">
        社群討論
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="description-box">
                    <p>還是有地方不了解的話，可以到社群發問，尋找其他人士的協助。</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
