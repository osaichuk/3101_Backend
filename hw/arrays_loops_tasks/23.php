<?php

$number = rand(-1000, 1000);

if (!is_numeric($number)){
    exit('Введите число!');
}

$sum = 0;
echo "число: $number <br>";
$number = abs($number);
while ($number >= 1){
    $sum += floor($number) % 10;
    $number /= 10;
}
echo "Сумма цифр: $sum";