<?php
session_start();
if ($_POST){
    $_SESSION['username'] = isset($_POST['username']) ? $_POST['username'] : null;
}
if ($_SESSION['username']){
    echo "Привет, {$_SESSION['username']}";
}
echo '<br>';
$_SESSION[] = $_SERVER['REQUEST_URI'];
var_dump($_SESSION);