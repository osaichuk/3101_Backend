<?php

function weekendList($arr, $weekend)
{
    $list = '';
    foreach ($arr as $item) {
        for ($i = 0; $i < count($weekend); $i++) {
            if ($item == $weekend[$i]) {
                $item = "<b>$item</b>";
            }
        }
        $list .= "$item<br>";
    }
    return $list;
}

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
echo weekendList($arr, $weekend);
