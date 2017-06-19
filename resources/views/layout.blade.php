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

        <!--
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        -->
        <link rel="stylesheet" href="/css/bootstrap-yeti.min.css">

        <link rel="stylesheet" href="/css/font-awesome.min.css">

        <script src="/js/jquery-1.12.0.min.js"></script>

        <script src='/js/bootstrap.min.js'></script>

    </head>
    <body>

        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">做網站要多少錢？</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                  <li><a href="/specs"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> 了解報價的差異</a></li>
                  <!--
                  <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> 尋找接案者</a></li>
                  -->
                  <li><a href="/jobs"><i class="fa fa-handshake-o" aria-hidden="true"></i> 發佈案件</a></li>

              <!--
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
              </ul>
            -->
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        @yield('content')

        <div class="subscribe-section">
            定期收到最新的功能參考報價，以及案件需求。
            歡迎追蹤粉絲專頁，或是留下 Email 訂閱 <input type='text' placeholder="Email...">
            <input type='submit' class="btn btn-success btn" value="訂閱">
        </div>

        <div class="container">
            <div class='row'>
                <div class='col-md-12'>
                    <hr>
                    <br>
                    <center>
                    <strong>
                    Maintained by <a href='https://www.facebook.com/chuanhao.you' target="_blank">阿川先生</a>
                    </strong>
                    </center>
                    <br>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-85456048-3', 'auto');
          ga('send', 'pageview');

        </script>

        <style>
            .navbar {
                margin-bottom: 0;
            }
            body {
                font-size: 15px;
                line-height: 1.7em;
            }
            .main-section {
                padding-top: 60px;
                padding-bottom: 60px;
            }
            .main-section.-blue {
                background-color: #E3F2FD;
            }
            .site-title {
                font-size: 3em;
                text-align: center;
                margin-bottom: 30px;
            }
            .site-slogan {
                font-size: 1.8em;
                text-align: center;
            }
            .menu-buttons {
                text-align: center;
                padding-top: 40px;
            }
            .menu-buttons .btn {
                padding: 20px 40px;
                font-size: 1.5em;
            }
            .section-title {
                font-size: 2em;
                text-align: center;
                margin-bottom: 30px;
            }
            .main-section iframe {
                width: 100%;
                height: 400px;
            }
            .subscribe-section {
                text-align: center;
                background-color: #424242;
                color: white;
                position: fixed;
                bottom: 0;
                width: 100%;
                z-index: 1;
                padding: 10px;
            }
        </style>
    </body>
</html>
