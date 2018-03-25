<?php

$count = isset($_COOKIE['count']) ? (int)$_COOKIE['count'] : 0;
$count++;
setcookie('count', $count, time() + 60 * 60 * 24 * 366, '/');

?>

Hello! You visited this page <?=$count; ?> times. <br/>