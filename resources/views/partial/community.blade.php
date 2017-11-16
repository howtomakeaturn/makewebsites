    <div class='row'>
        <div class='col-md-6'>

            <div class="alert alert-info" role="alert">
                <strong>資料持續整理中</strong>：<a href='https://docs.google.com/spreadsheets/d/1inP0HewbSa3JSLYZNrVySkCCU-qo-kG95vDyxwg8bjg/edit?usp=sharing' target="_blank">點這裡可以參與編輯</a>
            </div>

        </div>

        <div class='col-md-6'>

            <div class="alert alert-success" role="alert">
                <strong>上次更新資料時間</strong>：2017-11-16 09:24</a>
            </div>

        </div>
    </div>

    <div class='row item-box -header'>
        <div class='col-md-3'>
            名稱
        </div>
        <div class='col-md-7'>
            社群簡介
        </div>
        <div class='col-md-2'>
            網址
        </div>
    </div>
    @foreach($rows as $row)
    <div class='row item-box'>
        <div class='col-md-3'>
            <div class='title'>{{ $row[0] }}</div>
        </div>
        <div class='col-md-7'>
            {!! ($row[1]) !!}
        </div>
        <div class='col-md-2'>
            <a href='{{$row[2]}}' target="_blank">網址</a>
        </div>
    </div>
    @endforeach
