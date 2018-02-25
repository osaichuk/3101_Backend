<?php

$arr = [
    'monday',
    'tuesday',
    'wednesday',
    'thursday',
    'friday',
    'saturday',
    'sunday'
];
$weekend = ['saturday', 'sunday'];

foreach ($arr as $item) {
    for ($i = 0; $i < count($weekend); $i++) {
        if ($item == $weekend[$i]) {
            $item = "<b>$item</b>";
        }
    }
    echo $item. "<br>";
}