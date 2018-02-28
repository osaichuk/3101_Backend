<?php

function arrSelect($arrTemp)
{
    $result = '';
    foreach ($arrTemp as $item){
        if ($item > 3 && $item < 10){
            $result .= $item . '<br>';
        }
    }
    return $result;
}

$arr = [2, 5, 9, 15, 0, 4];
echo arrSelect($arr);