
    <div class='row'>
        <div class='col-md-8 col-md-offset-2'>

            <div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>資料持續整理中</strong>：<a href='https://docs.google.com/spreadsheets/d/1XGbYp7YkMN_0PTz-h99mADWOp8xTsUq50-xOxVLJfJU/edit?usp=sharing' target="_blank">點這裡可以參與編輯</a>
            </div>

            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>上次更新資料時間</strong>：2017-11-12 14:35</a>
            </div>

        </div>
    </div>

    <div class='row item-box -header'>
        <div class='col-md-1'>
            功能名稱
        </div>
        <div class='col-md-4'>
            基本款 - 功能說明（至少要收這些錢）
        </div>
        <div class='col-md-4'>
            進階版 - 功能說明（這些全部要加錢）
        </div>
        <div class='col-md-1'>
            價格
        </div>
        <div class='col-md-1'>
            工時
        </div>
        <div class='col-md-1'>
            說明人
        </div>
    </div>
    @foreach($rows as $row)
    <div class='row item-box'>
        <div class='col-md-1'>
            <div class='title'>{{ $row[0] }}</div>
        </div>
        <div class='col-md-4'>
            {!! ($row[1]) !!}
            <div class='visible-xs-block'>
                <hr class='mobile-hr'>
            </div>
        </div>
        <div class='col-md-4'>
            {!! ($row[2]) !!}
        </div>
        <div class='col-md-1'>
            {{ $row[3] }}
        </div>
        <div class='col-md-1'>
            {{ $row[4] }}
        </div>
        <div class='col-md-1'>
            {{ $row[5] }}
        </div>
    </div>
    @endforeach
