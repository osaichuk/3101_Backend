<?php

$a = rand(0, 100);
$b = rand(0, 100);
var_dump($a, $b);
echo '<br/>';
if ($a >= $b) {
    echo $a;
    exit();
}
echo $b;