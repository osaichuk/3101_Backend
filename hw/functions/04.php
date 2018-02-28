<?php

function arrStr($arrTemp)
{
    $keyStr = '';
    $itemStr = '';
    foreach ($arrTemp as $key => $item){
        $keyStr .= "$key<br>";
        $itemStr .= "$item<br>";
    }
    return $keyStr . '<hr>' . $itemStr;
}

$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
echo arrStr($arr);
