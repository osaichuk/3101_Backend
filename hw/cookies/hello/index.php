<?php
/**
 * Сделайте две страницы: index.php и hello.php. При заходе на index.php
 * спросите с помощью формы имя пользователя, запишите его в сессию.
 * При заходе на hello.php поприветствуйте пользователя фразой "Привет, %Имя%!".
 */
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
<form action="hello.php" method="post">
    <br><label>Name<br><input type="text" name="username"></label><br><br>
    <input type="submit"/>
</form>
</body>
</html>