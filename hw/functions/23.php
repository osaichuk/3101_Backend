<?php

function sumNumbers($number)
{
    if (!is_numeric($number)){
        exit('Введите число!');
    }
    $sum = 0;
    $number = abs($number);
    while ($number >= 1){
        $sum += floor($number) % 10;
        $number /= 10;
    }
    return $sum;
}

$number = rand(-1000, 1000);
$sum = sumNumbers($number);
echo "число: $number <br>";
echo "Сумма цифр: $sum";