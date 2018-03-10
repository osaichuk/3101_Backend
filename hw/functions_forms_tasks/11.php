<?php

function requestPost($key)
{
    if (isset($_POST[$key])){

        return $_POST[$key];
    }

    return null;
}

function addPointUc(&$item)
{
    $item = trim($item, " ");
    $firstLetter = mb_substr($item, 0, 1);
    $firstLetter = mb_convert_case($firstLetter, MB_CASE_UPPER);
    $nextLetter = mb_substr($item, 1);
    $item = $firstLetter . $nextLetter;
    $item .= '.';
}

function sentenceTransform($str)
{
    if(!$str){

        return null;
    }
    $arr = explode(".", $str);
    $arr = array_filter($arr);
    array_walk($arr, 'addPointUc');
    $str = implode(" ", $arr);
    return $str;
}

$str = requestPost('message');

$strTransform = sentenceTransform($str);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 11</title>
</head>
<body>
<form method="post">
    <textarea name="message" rows="10" style="width: 500px; margin: 10px;"></textarea>
    <button type="submit">Send</button>
</form>
<div style="width: 290px; margin: 20px; float: left;">
    <h3>Your text</h3>
    <?php
    echo requestPost('message');
    ?>
</div>
<div style="width: 190px; margin: 20px; float: left;">
    <h3>Result</h3>
    <ul>
        <?= $strTransform; ?>
    </ul>

</div>
</body>
</html>
