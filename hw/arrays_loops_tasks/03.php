<?php


$arr = [26, 17, 136, 12, 79, 15];
$result = 0;
foreach ($arr as $item){
    $result += pow($item, 2);
}
echo $result;