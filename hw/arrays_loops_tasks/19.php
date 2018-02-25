<?php

$week = [
    'monday',
    'tuesday',
    'wednesday',
    'thursday',
    'friday',
    'saturday',
    'sunday'
];

$day = strtolower(date('l'));
foreach ($week as $item){
    echo $item == $day ? "<i>$item</i>" : $item;
    echo '<br>';
}
