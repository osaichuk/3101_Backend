<?php

function mirror($number){
    for ($firsNumber = 0; floor($number); $number /= 10){
        $lastNumber = $number % 10;
        $firsNumber = ($firsNumber + $lastNumber) * 10;
    }
    return $firsNumber / 10;
}

$x = rand(1, 100);
$y = mirror($x);
if ($x == $y){
    echo "Число $x - палиндром.";
} else{
    echo "Число $x - не палиндром.";
}