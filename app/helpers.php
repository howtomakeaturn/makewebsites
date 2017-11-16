<?php

function get_rows()
{
    return _get_rows(storage_path('app/latest/features.csv'));
}

function get_dict_rows()
{
    $file = fopen(storage_path('app/2016-12-04-15-48/dictionary.csv'), 'r');

    $rows = [];

    while (($line = fgetcsv($file)) !== FALSE) {
        $rows[] = $line;
    }

    fclose($file);

    unset($rows[0]);

    return $rows;
}

function get_service_rows()
{
    return _get_rows(storage_path('app/latest/services.csv'));
}

function get_profile_rows()
{
    return _get_rows(storage_path('app/latest/profiles.csv'));

}

function get_community_rows()
{
    return _get_rows(storage_path('app/latest/community.csv'));
}

function _get_rows($path)
{
    $file = fopen($path, 'r');

    $rows = [];

    while (($line = fgetcsv($file)) !== FALSE) {
        $rows[] = $line;
    }

    fclose($file);

    unset($rows[0]);

    return collect($rows);
}

function replace_at_icon($str)
{
    $url = url('/image/at.png');
    return str_replace('@', " <img src='$url' style='width: 20px;'> ", $str);
}

function short_title()
{
    //return '做網站 - 各種方法懶人包';
    return '做網站的100種方法';

}

function long_title()
{
    return short_title() . '：架站平台、接案公司、預算列表，各類資源總整理';
}
