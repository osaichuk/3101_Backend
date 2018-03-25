<?php
$db_data = array(
    'username' => 'jessie',
    'password' => 'magnets'
);

$status = true;

if ($_POST) {

    // TODO: add validation of POST data
    $username = isset($_POST['username']) ? $_POST['username'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;
} elseif ($_COOKIE) {
    $username = isset($_COOKIE['username']) ? $_COOKIE['username'] : null;
    $password = isset($_COOKIE['password']) ? $_COOKIE['password'] : null;
} else {
    die("Restricted area!");
}

foreach ($db_data as $k => $v) {
    $status = $status && ($$k === $v);
}