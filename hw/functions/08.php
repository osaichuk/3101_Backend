<?php

function arrToStrForeach($arrTemp)
{
    $str = '';
    foreach ($arrTemp as $item){
        $str .= $item;
    }
    return $str;
}

function arrToStrFor($arrTemp)
{
    $str = '';
    for ($i = 0; $i < count($arrTemp); $i++){
        $str .= $arrTemp[$i];
    }
    return $str;
}

function arrToStrWhile($arrTemp)
{
    $str = '';
    $i = 0;
    while ($i < count($arrTemp)){
        $str .= $arrTemp[$i];
        $i++;
    }
    return $str;
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$str = arrToStrForeach($arr);
var_dump($str);
echo '<hr>';

$str = arrToStrFor($arr);
var_dump($str);
echo '<hr>';

$str = arrToStrWhile($arr);
var_dump($str);
