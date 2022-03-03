<?php

function read_data(string $key)
{
    $json = file_get_contents(PATH_DB);
    $data = json_decode($json, true);
    return $data[$key];
}

function save_data($key, array $array)
{
    return [];
}