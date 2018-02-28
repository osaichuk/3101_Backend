<?php

function pair($x, $y)
{
    for ($i = $x; $i <= $y; $i++){
        if ($i % 2 == 0){
            echo $i . '<br>';
        }
    }
}

$min = 1;
$max = 100;
pair($min, $max);