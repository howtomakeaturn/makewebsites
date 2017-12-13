
    @include('partial/link-to-github')

    <br>
    <div class='row item-box -header'>
        <div class='col-md-1'>
            名稱
        </div>
        <div class='col-md-2'>
            支援功能
        </div>
        <div class='col-md-4'>
            補充說明
        </div>
        <div class='col-md-4'>
            價格
        </div>
        <div class='col-md-1'>
            網址
        </div>
    </div>
    @foreach($rows as $row)
    <div class='row item-box'>
        <div class='col-md-1'>
            <div class='title'>{{ $row[0] }}</div>
        </div>
        <div class='col-md-2'>
            {!! ($row[2]) !!}
        </div>
        <div class='col-md-4'>
            {{ $row[3] }}
        </div>
        <div class='col-md-4'>
            {{ $row[4] }}
        </div>
        <div class='col-md-1'>
            <a href='{{$row[1]}}' target="_blank">網址</a>
        </div>
    </div>
    @endforeach
