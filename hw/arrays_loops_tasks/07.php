<?php

$arr = [2, 5, 9, 15, 0, 4];

foreach ($arr as $item){
    if ($item > 3 && $item < 10){
        echo $item . '<br>';
    }
}