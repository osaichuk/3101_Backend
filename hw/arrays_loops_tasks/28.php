<?php

echo 'Таблица умножения <hr>';
for ($i = 2; $i < 10; $i++){
    for ($j = 1; $j <= 10; $j++){
        echo "$i * $j = " . $i * $j . "<br>";
    }
    echo '<hr>';
}