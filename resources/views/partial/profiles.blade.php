
    @include('partial/link-to-github')

    <br>
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
