<?php

$number = 442158755745;
$i = rand(0, 99);

function countNumbers($numbers, $number)
{
    $arr = str_split($numbers, strlen($number));
    $count = 0;
    foreach ($arr as $item){
        if ($item == $number){
            $count++;
        }
    }
    return $count;
}
$count  = countNumbers($number, $i);
echo "Цифра $i встречается в числе \"$number\" $count раз(а).";