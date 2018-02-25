<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$str = '';

foreach ($arr as $item){
    $str .= $item;
}
var_dump($str);
echo '<hr>';

$str = '';
for ($i = 0; $i < count($arr); $i++){
    $str .= $arr[$i];
}
var_dump($str);
echo '<hr>';

$str = '';
$i = 0;
while ($i < count($arr)){
    $str .= $arr[$i];
    $i++;
}
var_dump($str);
echo '<hr>';