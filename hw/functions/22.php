<?php

function pyramid($row)
{
    $str = '';
    for ($i = 0; $i < $row; $i++) {
        $str .= 'xx';
        echo $str . "<br>";
    }
}

$rows = 5;
pyramid($rows);

