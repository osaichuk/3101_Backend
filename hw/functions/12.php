<?php

$number = 1000;
$dev = 2;
function devNum($n, $d)
{
    for ($i = 0; $n > 50; $i++){
        $n = $n / $d;
    }
    echo 'Получилось число: ' . $n . '<br>';
    return $i;
}
$num = devNum($number, $dev);
echo 'Количество итераций: ' . $num;