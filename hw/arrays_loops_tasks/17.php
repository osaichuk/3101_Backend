<?php

$months = [
    'january',
    'february',
    'march',
    'april',
    'may',
    'june',
    'july',
    'august',
    'september',
    'october',
    'november',
    'december'
];
$month = strtolower(date('F'));
foreach ($months as $item){
    echo $item == $month ? "<b>$item</b>" : $item;
    echo '<br>';
}