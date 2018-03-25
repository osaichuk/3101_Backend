<?php
session_start();
//var_dump($_SESSION);
echo '<h2>Вы посетили следующие страницы:</h2><br>';
if (isset($_SESSION['visited'])) {
    foreach ($_SESSION['visited'] as $value) {
        echo "$value<br>";
    }
}