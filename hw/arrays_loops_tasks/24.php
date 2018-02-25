<?php

$number = 442158755745;
$i = rand(0, 99);

$arr = str_split($number, strlen($i));
$count = 0;
foreach ($arr as $item){
    if ($item == $i){
        $count++;
    }
}

echo "Цифра $i встречается в числе \"$number\" $count раз(а).";