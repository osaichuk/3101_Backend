<?php

require_once 'functions.php';

$message = requestGet('message');
$file = requestFiles('file');
//var_dump($file);
$currentDir = chooseDir($file);
if ($_FILES){

    if (validateForm($file)){
        $message = 'Saved';
        move_uploaded_file($file['tmp_name'], "$currentDir{$file['name']}");

        //redirect('/3101/Backend/hw/forms/upload-files.php?message=' . $message);
    } else{
        $message = "Form invalid<br>";
    }

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload files</title>
    <style>
        body {
            width: 75vw;
            margin: 10px auto;
        }
    </style>
</head>
<body>
<h1>Add new files</h1>
<h3><i>In this gallery you can upload files max 2Mb: .jpg, .png, .txt, .doc, .docx, .pdf</i></h3>
<h4><?= $message?></h4>

<form method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
    <input type="file" name="file"><br><br>
    <button type="submit">Send</button>
</form>
<h3><a href="index.php"><< Back to gallery</a></h3>
</body>
</html>
