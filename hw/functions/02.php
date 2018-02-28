<?php

function sumArr($arrTemp)
{
    $res = 0;
    foreach ($arrTemp as $item){
        $res += $item;
    }
    return $res;
}

$arr = [1, 20, 15, 17, 24, 35];
$result = sumArr($arr);

echo $result;