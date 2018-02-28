<?php

function pyramid($row)
{
    $str = '';
    for ($i = 0; $i < $row; $i++) {
        $str .= 'x';
        echo $str . "<br>";
    }
}

$rows = 20;
pyramid($rows);
