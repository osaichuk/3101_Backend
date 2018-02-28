<?php

function dayList($days, $dayCur)
{
    $list ='';
    foreach ($days as $item){
        $list .= $item == $dayCur ? "<i>$item</i><br>" : "$item<br>";
    }
    return $list;
}

$week = [
    'monday',
    'tuesday',
    'wednesday',
    'thursday',
    'friday',
    'saturday',
    'sunday'
];
$dayCurrent = strtolower(date('l'));
echo dayList($week, $dayCurrent);