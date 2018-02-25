<?php

$a = 0;
$b = boolval($a);
var_dump($b); // false, число 0, пустая строка и null - это false.