<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $item){
    echo $item;
    if ($item !== 3 && $item !== 6){
        echo '<br>';
    }
}