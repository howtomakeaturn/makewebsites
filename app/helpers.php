<?php

function get_rows()
{
    $file = fopen(storage_path('app/2016-11-26-15-52/features.csv'), 'r');

    $rows = [];

    while (($line = fgetcsv($file)) !== FALSE) {
        $rows[] = $line;
    }

    fclose($file);

    return $rows;
}
