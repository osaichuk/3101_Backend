<?php

function searchNumber($arr, $num)
{
    $result = boolval(false);
    foreach ($arr as $item){
        if ($item == $num){
            $result = boolval(true);
            continue;
        }
    }
    return $result;
}

$e = 4;
$arr = [4, 2, 5, 19, 13, 0, 10];
echo searchNumber($arr, $e) ? 'Есть!' : 'Нет!';