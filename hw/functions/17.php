<?php

function monthList($m, $mCur)
{
    $list = '';
    foreach ($m as $item){
        $list .= $item == $mCur ? "<b>$item</b> <br>" : "$item<br>";
    }
    return $list;
}

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
$monthCurrent = strtolower(date('F'));
echo monthList($months, $monthCurrent);
