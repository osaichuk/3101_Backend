<?php

$day = rand(1, 7);
echo "Сегодня {$day}-й день недели.<br/>";
switch ($day){
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Это рабочий день';
}