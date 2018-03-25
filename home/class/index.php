<?php

// setcookie('test-form', 456);
// setcookie('est-global', 678, 0, '/');

var_dump($_COOKIE);

require_once 'functions.php';

$message = requestGet('message'); // $_GET['message']

if ($_POST) {
    $number = requestPost('number'); // $_POST['number']    
    
    if (isNumberPositive($number)) {
        $message = isPrime($number) ? 'Prime' : 'Not prime';
        
        redirect('/3101/Backend/lesson/form?message=' . $message); //die
    }
    
    $message = 'Invalid';
}

require 'layout.phtml';
 
 
// ssh test 