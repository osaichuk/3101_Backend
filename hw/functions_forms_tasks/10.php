<?php

function getClearWords($str)
{
    $arr = explode(" ", $str);
    //var_dump($arr);
    foreach ($arr as &$item){
        $item = mb_strtolower(trim($item, " . , ? ! \" '( ) { } [ ] - "));
    }
    return $arr;
}

function requestPost($key)
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return null;
}

$str = requestPost('message');

$arr = array_unique(getClearWords($str));
$uniqueWords = $_POST ? count($arr) : null;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 10</title>
</head>
<body>
<form method="post">
    <textarea name="message" cols="30" rows="10"></textarea>
    <button type="submit">Send</button>
</form>
<div>
    <?= "Количество уникальных слов: $uniqueWords" ?>
</div>
</body>
</html>
