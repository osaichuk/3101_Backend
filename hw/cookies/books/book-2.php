<?php

session_start();
if (isset($_SESSION['visited'])){
    if (!in_array($_SERVER['REQUEST_URI'], $_SESSION['visited'])){
        $_SESSION['visited'][] = $_SERVER['REQUEST_URI'];
    }
} else {
    $_SESSION['visited'] = [];
    $_SESSION['visited'][] = $_SERVER['REQUEST_URI'];
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <img src="img/443613_165.jpg" alt="443613_165.jpg">
</div>
<p>Настали літні канікули – погода чудова, і всі діти веселяться надворі.
    А де ж Ґреґ Гефлі? Вдома, грається у відеоігри за запнутими шторами.
    Ґреґ не приховує, що йому «більше до вподоби приміщення», він живе у своїй
    найкращій літній фантазії: жодних обов’язків і жодних правил.
    Але Ґреґова мама інакше уявляє собі ідеальне літо…<br>
        <br>
        <br>
</p>
</body>
</html>

