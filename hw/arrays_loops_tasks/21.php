<?php

for ($tr = 1; $tr <= 9; $tr++){
    $str = '';
    for ($td = 1; $td <= $tr; $td++){
        $str .= $tr;
    }
    echo $str . '<br>';
}