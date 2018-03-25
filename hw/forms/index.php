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
$imgDir = 'gallery/img/';
$docDir = 'gallery/doc/';
$imgFiles = is_array(scandir($imgDir)) ?  array_slice(scandir($imgDir), 2) : [];
$docFiles = is_array(scandir($docDir)) ?  array_slice(scandir($docDir), 2) : [];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My gallery</title>
    <style>
        body {
            width: 75vw;
            margin: 10px auto;
        }
        h1 {
            text-align: center;
        }
        .gallery {
            display: flex;
            justify-content: space-around;
            flex-flow: row nowrap;
        }
        .imgGallery {
            display: flex;
            justify-content: space-around;
            flex-flow: row wrap;
            flex: 0 0 70%;
        }
        .docGallery {
            display: flex;
            justify-content: flex-start;
            flex-direction: column;
            flex: 0 0 25%;
        }
        .image img {
            margin: 20px;
            max-width: 250px;
            max-height: 250px;
        }
    </style>
</head>
<body>
<h2><a href="upload-files.php">Add new files</a></h2>

<h1>Gallery</h1>
<div class="gallery">
    <div class="docGallery">
        <h3>Docs list</h3>
        <?php foreach ($docFiles as $file) : ?>
            <div class="docs"><p><?=$file ?></p></div>
        <?php endforeach; ?>
    </div>
    <div class="imgGallery">
        <?php foreach ($imgFiles as $file) : ?>
            <div class="image"><img src="<?= $imgDir . '/' . $file?>" alt="<?=$file ?>"></div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>
