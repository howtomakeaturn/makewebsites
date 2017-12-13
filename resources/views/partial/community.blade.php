
    @include('partial/link-to-github')

    <br>
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
