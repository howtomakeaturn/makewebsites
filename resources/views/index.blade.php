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

    .bg .cta {
        margin-top: 0.5rem;
    }

    @media (min-width: 768px) {
        .bg {
            padding-top: 60px;
            padding-bottom: 60px;
        }
        .bg > .title {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 20px;
        }
        .bg .cta {
            margin-top: 1.5rem;
        }
    }

</style>

@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="greeting-box">
                <div class="main">{{short_title()}}</div>
                <div class="description">
                    找人接案之前，可以先看看有哪些選項。<br>
                    架站平台、接案公司、預算列表，各類資源總整理。
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg -grey" id='top'>
    <!--
    <div class="title">
        多做功課，不會吃虧。
    </div>
    -->

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
                <a href='#services' class="btn btn-primary btn-block">
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
                <a href='#profiles' class="btn btn-primary btn-block">
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
                <a href='#prices' class="btn btn-primary btn-block">
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
                <a href='#community' class="btn btn-primary btn-block">
                    看看哪裡有社群可討論
                </a>
            </div>
        </div>
    </div>

</div>

</div>

<div class="bg" id='services'>
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
                    <!--
                    <a class="btn btn-primary btn-lg cta" href="/services">看看有哪些架站服務</a>
                    -->
                </div>
            </div>
        </div>
        <br>
        @include('partial/services', ['rows' => get_service_rows()])
    </div>
</div>

<div class="bg -grey" id='profiles'>
    <div class="title">
        接案公司
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="description-box">
                    <p>每一間接案公司的強項、特色都不同。</p>
                    <p>貨比三家不吃虧，逛逛每個團隊的作品集，找一間喜歡的公司，跟他們要個報價。</p>
                    <!--
                    <a class="btn btn-primary btn-lg cta" href="/profiles">看看有哪些接案公司</a>
                    -->
                </div>
            </div>
        </div>
        <br>
        @include('partial/profiles', ['rows' => get_profile_rows()])
    </div>
</div>

<div class="bg" id='prices'>
    <div class="title">
        認識報價
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="description-box">
                    <p>不同接案公司的報價價差非常巨大</p>
                    <p>這是因為各種功能可大可小，取決於豐富、完整到什麼程度。</p>
                    <!--
                    <a class="btn btn-primary btn-lg cta" href="/prices">了解一下報價的價差</a>
                    -->
                </div>
            </div>
        </div>
        <br>
        @include('partial/prices', ['rows' => get_rows()])
    </div>
</div>

<div class="bg -grey" id='community'>
    <div class="title">
        社群討論
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="description-box">
                    <p>還是有地方不了解的話，可以到社群發問，尋找其他人士的協助。</p>
                    <!--
                    <a class="btn btn-primary btn-lg cta" href="/community">看看哪裡有社群可討論</a>
                    -->
                </div>
            </div>
        </div>
        <br>
        @include('partial/community', ['rows' => get_community_rows()])
    </div>
</div>

<a href="#top" id='return-to-top'><i class="fa fa-chevron-up" aria-hidden="true"></i></a>

<style>
#return-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.7);
    width: 50px;
    height: 50px;
    text-decoration: none;
    border-radius: 35px;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    z-index: 10;
    /*
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    */
}
#return-to-top i {
    color: #fff;
    margin: 0;
    position: relative;
    left: 16px;
    top: 13px;
    font-size: 19px;
    /*
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    */
}
/*
#return-to-top:hover {
    background: rgba(0, 0, 0, 0.9);
}

#return-to-top:hover i {
    color: #fff;
    top: 5px;
}
*/
</style>

@endsection
