<?php

function countArr($arr)
{
    $count = 0;
    foreach ($arr as $item){
        $count++;
    }
    return $count;
}

$arr = [4, 2, 5, 19, 13, 0, 10];
echo countArr($arr);