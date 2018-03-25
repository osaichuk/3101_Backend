<?php

function requestGet($key)
{
    if (isset($_GET[$key])) {
        return $_GET[$key];
    }

    return null;
}

function requestFiles($key)
{
    if (isset($_FILES[$key])) {
        return $_FILES[$key];
    }

    return null;
}

function chooseDir($file)
{
    switch ($file['type']){
        case 'image/jpeg':
        case 'image/png':
            return 'gallery/img/';
        case 'text/plain':
        case 'application/msword':
        case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
        case 'application/pdf':
            return 'gallery/doc/';
        default:
            return false;
    }
}

function validateForm($file)
{
    if (!$file){
        return false;
    }

    $allowedFormats = ['image/jpeg', 'image/png', 'text/plain', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/pdf'];
    $formatTypeValid = in_array($file['type'], $allowedFormats);

    return !$file['error'] && $formatTypeValid;
}