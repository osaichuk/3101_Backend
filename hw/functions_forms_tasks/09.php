<?php
function requestGet($key)
{
    if (isset($_GET[$key])) {
        return $_GET[$key];
    }

    return null;
}
function abBa($str)
{
    return strrev($str);
}

$str = abBa(requestGet('message'));
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 09</title>
</head>
<body>
<form method="get">
    <textarea name="message" cols="30" rows="10"></textarea>
    <button type="submit">Send</button>
</form>
<div>
    <?php
    echo $str;
    ?>
</div>
</body>
</html>
