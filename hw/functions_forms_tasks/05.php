<?php

function searchInDirectory ($bitStr, $folder)
{
    $listAllFiles = scandir($folder);
    $listChoiceFiles = '';
    foreach ($listAllFiles as $file){
        if (stripos($file, $bitStr) !== false){
            $listChoiceFiles .= ($file . '<br>');
        }
    }

    return $listChoiceFiles;

}
$bitStr = 'prod';
$dir = "../../lesson/form";
echo searchInDirectory($bitStr, $dir);