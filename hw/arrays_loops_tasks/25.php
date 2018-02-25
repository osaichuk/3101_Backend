<?php

$arr = [];
$max = 0;
$min = 1000;

for ($i = 0; $i < rand(2, 20); $i++){
    $arr[] = rand($max, $min);
}
var_dump($arr);
echo '<hr>';

foreach ($arr as $index => $item){
    if ($item > $max){
        $max = $item;
        $maxIndex = $index;
    }
    if ($item < $min){
        $min =  $item;
        $minIndex = $index;
    }
}
echo "Максимальное {$maxIndex}-е число: $max";
echo '<br>';
echo "Минимальное {$minIndex}-е число: $min";
echo '<hr>';

$arr[$maxIndex] = $min;
$arr[$minIndex] = $max;
var_dump($arr);