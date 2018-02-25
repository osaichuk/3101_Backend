<?php

$arr = [];
$max = -100;
$min = 100;
$result = 'Нет таких элементов <br>';
$multi = 1;
$countPair = 0;
$countUnpair = 0;
for ($i = 0; $i < rand(2, 20); $i++){
    $arr[] = rand($max, $min);
}
var_dump($arr);
echo '<hr>';
echo 'Элементы, которые больше ноля и у которых не парный индекс: <br>';
foreach ($arr as $index => $item){
    if (!($index % 2) && ($item > 0)){
        $multi *= $item;
        $countPair++;
    }
    if ($index % 2 && $item > 0){
        echo "$item <br>";
        $countUnpair++;
    }
}
if (!$countUnpair){
    echo $result;
}

$resultPair = $countPair ? $multi : $result;
echo "Произведение тех элементов, которые больше ноля и
      у которых парные индексы: <br> $resultPair";
