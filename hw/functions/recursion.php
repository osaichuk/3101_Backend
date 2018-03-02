<?php

// todo: implement by loops and by recursion
// x^n
// 1+x+x^2+x^3+...+x^n

//------------- x^n --by recursion-----------------
function power($x, $n)
{
    if ($n == 0){
        return 1;
    }
    if ($n == 1){
        return $x;
    }
    if ($n == 2){
        return $x * $x;
    }

    return power($x, $n - 1) * $x;
}

echo power(4, 3);
echo '<hr>';

//---------- x^n --by loops------------------------
$x = 4;
$n = 4;
$result = 1;
for ($i = 1; $i <= $n; $i++){
    $result *= $x;
}
echo $result;
echo '<hr>';

//----------1+x+x^2+x^3+...+x^n----by loops-------------------

$a = 4;
$b = 4;
for ($resultPow = 1; $b >= 1; $b--){
    $pow = 1;
    for ($i = 1; $i <= $b; $i++){
        $pow *= $a;
    }
    $resultPow += $pow;
}

echo $resultPow;
echo '<hr>';

//----------1+x+x^2+x^3+...+x^n----by recursion-------------------

function pow1($x, $n)
{
    if ($n == 0){
        return 1;
    }
    if ($n == 1){
        return $x;
    }
    if ($n == 2){
        return $x * $x;
    }

    return pow1($x, $n - 1) * $x;
}

function sumPower($x, $n)
{
    if ($n == 0){
        return 2;
    }
    if ($n == 1){
        return 1 + $x;
    }
    return sumPower($x, $n - 1) + pow1($x, $n);
}
echo  sumPower(2, 2);
echo '<hr>';