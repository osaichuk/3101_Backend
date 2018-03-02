<?php

function getTrimWords($arr)
{
    foreach ($arr as &$item){
        $item = trim($item, ".,?!\"'(){}[]-");
    }
    return $arr;
}
function arrSort($a, $b)
{
    $a = iconv_strlen($a);
    $b = iconv_strlen($b);
    if ($a == $b) {
        return 0;
    }

    return ($a < $b) ? 1 : -1;
}

function getWords($a)
{
    $arr = preg_split("/\s/", $a);
    $arr = getTrimWords($arr);
    usort($arr, "arrSort");

    return $arr;
}

function requestPost($key)
{
    if (isset($_POST[$key])){
        return $_POST[$key];
    }

    return null;
}

$arr = getWords(requestPost('message'));

//var_dump($arr);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 02</title>
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
        <h3>TOP 3 words</h3>
        <?php
        echo isset($arr[0]) ? "$arr[0]<br>" : null;
        echo isset($arr[1]) ? "$arr[1]<br>" : null;
        echo isset($arr[2]) ? "$arr[2]<br>" : null;
        ?>
    </div>
</body>
</html>