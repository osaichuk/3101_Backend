<?php

function requestFiles($key)
{
    if (isset($_FILES[$key])) {
        return $_FILES[$key];
    }

    return null;
}

function validateForm($image)
{
    if (!$image){
        return false;
    }
    if ($_FILES['image']['error']) {
        return false;
    }

    return true;
}

$message = requestGet('message');
$image = requestFiles('image');
$dir = 'gallery';
if ($_FILES){

    if (validateForm($image)){
        $message = 'Saved';
        move_uploaded_file($_FILES['image']['tmp_name'], "gallery/{$_FILES['image']['name']}");

        //redirect('/3101/Backend/hw/functions_forms_tasks/06/06.php?message=' . $message);
    } else{
        $message = "Form invalid<br>";
    }

}

$listFiles = scandir($dir);
$listFiles = array_slice($listFiles, 2);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 06</title>
    <style>
        body {
            width: 70vw;
            margin: 10px auto;
        }
        .gallery {
            display: flex;
            justify-content: space-around;
            flex-flow: row wrap;
        }
        .image img {
            margin: 20px;
            max-width: 300px;
            max-height: 300px;
        }
    </style>
</head>
<body>
<h2>Add new Pictures</h2>
<h4><?= $message?></h4>
<form method="post" enctype="multipart/form-data">
    <lebel>Load files max 2Mb <input type="file" name="image"></lebel><br><br>
    <button type="submit">Send</button>
</form>
<h1>Gallery</h1>
<div class="gallery">
    <?php foreach ($listFiles as $file) : ?>
    <div class="image"><img src="<?= $dir . '/' . $file?>" alt="<?=$file ?>"></div>
    <?php endforeach; ?>

</div>
</body>
</html>
