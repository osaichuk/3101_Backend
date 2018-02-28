<?php

function strArr($arr)
{
    $str = '';
    foreach ($arr as $item){
        $str .=  $item;
        if ($item !== 3 && $item !== 6){
            $str .= '<br>';
        }
    }
    return $str;
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
echo strArr($arr);