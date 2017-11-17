    <div class='row'>
        <div class='col-md-6'>

            <div class="alert alert-info" role="alert">
                <strong>資料持續整理中</strong>：<a href='https://docs.google.com/spreadsheets/d/1hlXeH3x9bbQzFbfQDPR3ylNYcvz3wOZmdoPaaisB9Ds/edit?usp=sharing' target="_blank">點這裡可以參與編輯</a>
            </div>

        </div>

        <div class='col-md-6'>

            <div class="alert alert-success" role="alert">
                <strong>上次更新資料時間</strong>：2017-11-17 18:56</a>
            </div>

        </div>
    </div>

    <div class='row item-box -header'>
        <div class='col-md-2'>
            名稱
        </div>
        <div class='col-md-8'>
            服務簡介
        </div>
        <div class='col-md-1'>
            所在城市
        </div>
        <div class='col-md-1'>
            網址
        </div>
    </div>
    @foreach($rows as $row)
    <div class='row item-box'>
        <div class='col-md-2'>
            <div class='title'>{{ $row[0] }}</div>
        </div>
        <div class='col-md-8'>
            {!! ($row[2]) !!}
        </div>
        <div class='col-md-1'>
            {!! ($row[3]) !!}
        </div>
        <div class='col-md-1'>
            <a href='{{$row[1]}}' target="_blank">網址</a>
        </div>
    </div>
    @endforeach
