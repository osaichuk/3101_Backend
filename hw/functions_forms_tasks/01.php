<?php

function getCommonWords($a, $b)
{
    $words1 = array_unique(getTrimWords(array_filter(preg_split("/\s/", $a))));
    $words2 = array_unique(getTrimWords(array_filter(preg_split("/\s/", $b))));
    $sameWordsArr = array_intersect($words1, $words2);
    $sameWords = implode(" <br>", $sameWordsArr);
    return $sameWords;
}

function getTrimWords($arr)
{
    foreach ($arr as &$item){
        $item = trim($item, ".,?!\"'(){}[]-");
    }
    return $arr;
}

function requestPost($key)
{
    if (isset($_POST[$key])){
        return $_POST[$key];
    }

    return null;
}

$sameWords = getCommonWords(requestPost('message1'), requestPost('message2'));
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 01</title>
</head>
<body>
    <form method="post">
        <textarea name="message1" cols="30" rows="10"></textarea>
        <textarea name="message2" cols="30" rows="10"></textarea>
        <button type="submit">Send</button>
    </form>
    <?= $sameWords; ?>
</body>
</html>