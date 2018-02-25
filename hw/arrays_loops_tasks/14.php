<?php
$e = 3;
$result = 'Нет';
$arr = [4, 2, 5, 19, 13, 0, 10];
foreach ($arr as $item){
    if ($item == $e){
        $result = 'Есть!';
        continue;
    }
}
echo $result;