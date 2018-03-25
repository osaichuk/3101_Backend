<?php

/**
 * Написать скрипт для загрузки пользовательских файлов.
 * При загрузке, в зависимости от типа файла – он на сервере должен помещаться
 * в папку /doc, или /img..etc
 * Должно быть ограничение на прием файлов – не более 2 мб.
 * Ссылку на форму загрузки разместить на главной странице сайта.
 * После добавления файлов, при заходе на главную, пользователь должен видеть галерею
 * ранее загруженных картинок, и список загруженных документов (все, что не картинки).
 * Код максимально писать функциями.
 */

require_once 'functions.php';

$message = requestGet('message');
$file = requestFiles('file');
//var_dump($file);
$currentDir = chooseDir($file);
$imgDir = 'gallery/img/';
$docDir = 'gallery/doc/';
if ($_FILES){

    if (validateForm($file)){
        $message = 'Saved';
        move_uploaded_file($file['tmp_name'], "$currentDir{$file['name']}");

        //redirect('/3101/Backend/hw/forms/upload-files.php?message=' . $message);
    } else{
        $message = "Form invalid<br>";
    }

}

$imgFiles = is_array(scandir($imgDir)) ?  array_slice(scandir($imgDir), 2) : [];
$docFiles = is_array(scandir($docDir)) ?  array_slice(scandir($docDir), 2) : [];

require_once 'gallery-files.phtml';