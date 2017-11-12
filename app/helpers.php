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
