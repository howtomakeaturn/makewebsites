<!doctype html>
<html>
    <head>
        <meta charset="utf-8">

        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>做網站要多少錢 - 關於做網站的各種功能與價格說明清單</title>

        <meta name="description" content="做網站要多少錢 - 關於做網站的各種功能與價格說明清單">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name='og:title' content="做網站要多少錢 - 關於做網站的各種功能與價格說明清單">

        <meta name='og:description' content="做網站要多少錢 - 關於做網站的各種功能與價格說明清單">

        <meta name='og:image' content="{{ url('/images/og-image.png') }}">

        <link rel="stylesheet" href="/css/bootstrap.min.css">

        <link rel="stylesheet" href="/css/font-awesome.min.css">

        <script src="/js/jquery-1.12.0.min.js"></script>

        <script src='/js/bootstrap.min.js'></script>

    </head>
    <body>

        {{--
        @include('_navbar')
        --}}

        <br>

        <div class="container">

            <div class='row'>
                <div class='col-md-12'>
                    <h2 style='color: #009688;'>做網站要多少錢</h2>
                    <p style='color: #757575;'>
                        關於做網站的各種功能與價格說明清單
                        <i class="fa fa-dollar" aria-hidden="true"></i>
                        <i class="fa fa-dollar" aria-hidden="true"></i>
                        <i class="fa fa-dollar" aria-hidden="true"></i>
                    </p>
                </div>
            </div>

            <!--
            <div class='row hidden-xs'>
                <div class='col-md-6'>
                    <ul class="list-group">
                      <li class="list-group-item">於 2016-12-08 15:38:27 更新：UI</li>
                      <li class="list-group-item">於 2016-12-04 21:30:38 更新：項目資料</li>
                      <li class="list-group-item">於 2016-12-04 15:58:01 新增：給業主參考的術語辭典</li>
                    </ul>
                </div>
                <div class='col-md-6'>
                    <div class="alert alert-warning" role="alert">
                        資料持續整理中：<br /><a href='https://goo.gl/pMHtI1' target="_blank">點擊這裡可以參與編輯</a>
                    </div>
                </div>
            </div>
            -->

        </div>
        <br>

        @yield('content')

        <br>

        <div class="container">
            <div class='row'>
                <div class='col-md-12'>
                    <hr>
                    <center>
                    <strong>
                    Maintained by <a href='https://www.facebook.com/chuanhao.you' target="_blank">阿川先生</a>
                    </strong>
                    </center>
                    <br>
                </div>
            </div>
        </div>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-85456048-3', 'auto');
          ga('send', 'pageview');

        </script>
    </body>
</html>
