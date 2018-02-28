<?php

function arrTable($arrTemp)
{
    $result = '';
    foreach ($arrTemp as $key => $item){
        $result .= "$key — зарплата $item долларов.<br>";
    }
    return $result;
}
$arr = ['Коля' => '200', 'Вася' => '300', 'Петя' => '400'];
echo arrTable($arr);
