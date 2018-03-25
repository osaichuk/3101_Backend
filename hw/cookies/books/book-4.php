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
    <img src="img/457528_165.jpg" alt="457528_165.jpg">
</div>
<p>
    Это дебютное произведение автора, в котором он описывает великолепный город
    Сарум – место рождения Эдварда Резерфорда.<br>
    Вы узнаете историю основания, прохождения и развития Древнего Сарума,
    Сорбиодуна периода римских завоеваний, нормандского Сарисбери и современного
    Солсбери от маленького селения до настоящего города.<br>
    Вместе с героями романа "Сарум. Роман об Англии" вы будете поселяться на
    неизведанных землях, проживать жизнь разных поколений, узнавать о быте,
    особенностях ремесла и укладах жизни от первых поселенцев до современных жителей.<br>
    Эдвард Резерфорд работал с реальными историческими фактами, умело соединяя и
    добавляя их в свой фантазийный сюжет, тем самым вызывая чувство достоверности и
    правдивости происходящего в книге.
</p>
</body>
</html>

