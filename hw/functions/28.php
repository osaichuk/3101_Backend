<?php

function multiTable($min, $max)
{
    for ($i = $min; $i <= $max; $i++){
        for ($j = 1; $j <= 10; $j++){
            echo "$i * $j = " . $i * $j . "<br>";
        }
        echo '<hr>';
    }
}

echo 'Таблица умножения <hr>';
$min = 3;
$max = 9;
multiTable($min, $max);
