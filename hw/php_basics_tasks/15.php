<?php

$a = rand(0, 100);
$b = rand(0, 100);
$arrayOperand = ['+', '-', '*', '/', '%'];
$keyOperand = array_rand($arrayOperand, 1);
$operand = $arrayOperand[$keyOperand];
//var_dump($a, $operand);
if (($operand == '/' || $operand == '%') && $b == 0) {
    exit("Ошибка. На 0 делить нельзя.");
}
switch ($operand) {
    case '+': $rez = $a + $b; break;
    case '-': $rez = $a - $b; break;
    case '*': $rez = $a * $b; break;
    case '/': $rez = $a / $b; break;
    case '%': $rez = $a % $b; break;
}
echo "$a $operand $b = $rez";