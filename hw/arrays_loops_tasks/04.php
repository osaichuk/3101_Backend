<?php

$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];

foreach ($arr as $key => $item){
    echo $key . '<br>';
}
echo '<hr>';
foreach ($arr as $item){
    echo $item . '<br>';
}