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
    <img src="img/450992_165.jpg" alt="450992_165.jpg">
</div>
<p>
    Труді зрадила чоловіка, Джона. Вона й досі живе у його помешканні — дорогому,
    але занедбаному лондонському будинку, — та Джона тут немає. Натомість сюди
    навідується його брат, неймовірно банальний Клод, і змовляється із Труді.
    А ще у їхнього підступу є свідок: допитливий дев’ятимісячний мешканець
    Трудіної утроби.<br>
    Ієн Мак’юен — лауреат Букерівської премії за роман «Амстердам», автор
    «Спокути», що отримала оскароносну екранізацію, — переповідає безсмертну трагедію
    з іще ніколи не баченої точки зору.<br>
    Для широкого кола читачів.<br>
    <br>
    <strong>Ієн Мак'юен</strong> - <i>лауреат Букерівської премії за роман
        "Амстердам", автор "Спокути", що отримала оскароносну екранізацію,
        переповідає безсмертну трагедію з іще ніколи не баченої точки зору.</i>
</p>

</body>
</html>