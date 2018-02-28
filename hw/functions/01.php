<?php
function strArray($array)
{
    $str = '';
    foreach ($array as $item){
        $str .= "$item<br>";
    }
    return $str;
}
$arr = ['html', 'css', 'php', 'js', 'jq'];
echo strArray($arr);
