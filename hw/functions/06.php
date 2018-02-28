<?php

function arrPart($arrTemp)
{
    global $en;
    global $ru;
    foreach ($arrTemp as $key => $item){
         $en[] = $key;
         $ru[] = $item;
    }
}

$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
arrPart($arr);
var_dump($en, $ru);