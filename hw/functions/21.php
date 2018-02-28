<?php

function pyramid($row)
{
    for ($tr = 1; $tr <= $row; $tr++){
        $str = '';
        for ($td = 1; $td <= $tr; $td++){
            $str .= $tr;
        }
        echo $str . '<br>';
    }
}

$rows = 9;
pyramid($rows);