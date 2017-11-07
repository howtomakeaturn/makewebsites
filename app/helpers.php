<?php

function get_rows()
{
    $file = fopen(storage_path('app/2016-11-26-15-52/features.csv'), 'r');

    $rows = [];

    while (($line = fgetcsv($file)) !== FALSE) {
        $rows[] = $line;
    }

    fclose($file);

    unset($rows[0]);

    return $rows;
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
    $file = fopen(storage_path('app/2017-11-07/services.csv'), 'r');

    $rows = [];

    while (($line = fgetcsv($file)) !== FALSE) {
        $rows[] = $line;
    }

    fclose($file);

    unset($rows[0]);

    return $rows;
}

function get_profile_rows()
{
    $file = fopen(storage_path('app/2017-11-07/profiles.csv'), 'r');

    $rows = [];

    while (($line = fgetcsv($file)) !== FALSE) {
        $rows[] = $line;
    }

    fclose($file);

    unset($rows[0]);

    return $rows;
}
