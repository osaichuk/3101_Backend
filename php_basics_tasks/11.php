<?php

$day = rand(1, 7);
echo "Сегодня {$day}-й день недели.<br/>";
switch ($day){
    case 6:
    case 7:
        echo 'Это выходной день';
}