<?php

function sumPowArr($arrTemp)
{
    $res = 0;
    foreach ($arrTemp as $item){
        $res += pow($item, 2);
    }
    return $res;
}
$arr = [26, 17, 136, 12, 79, 15];
$result = sumPowArr($arr);
echo $result;