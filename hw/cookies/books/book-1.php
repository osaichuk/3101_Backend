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
    <img src="img/435212_165.jpg" alt="435212_165.jpg">
</div>
<p> <strong>Фантастична сага «Пісня льоду й полум'я» давно завоювала серця 
            читачів у всьому світі, перекладена більш як на 20 мов і продається 
            мільйонними накладами.
    </strong><br>
<br>
<br>
    П’ята книга циклу — «Танок драконів» — це захопливі подорожі на Стіну, 
    де вже відчувається крижаний подих зими, й у далекий Есос, розімлілий 
    від спеки, де пересичені рабовласники необачно викликають на тан драконів.<br>
<br>
    Джордж Р. Р. Мартін - один з найвідоміших письменників світу, 
    автор чотирнадцятьох романів, кількох збірок оповідань і численних 
    сценаріїв для кіно й телебачення. Серед братів по цеху його заслужено 
    називають майстром гільдії героїчного фентезі. А знаменита екранізація 
    "Гри престолів" поставила рекорд телебачення, зібравши біля екранів понад 
    25 мільйонів глядачів.<br>
</p>
</body>
</html>

