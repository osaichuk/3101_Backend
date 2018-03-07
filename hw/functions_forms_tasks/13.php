<?php
function requestPost($key)
{
    if (isset($_POST[$key])){

        return $_POST[$key];
    }

    return null;
}
$arr = [];
$arr = explode(" ", requestPost('message'));
$arr = $_POST ? array_count_values($arr) : null;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 13</title>
</head>
<body>
<form method="post">
    <textarea name="message" rows="10" style="width: 500px; margin: 10px;"></textarea>
    <button type="submit">Send</button>
</form>
<div style="width: 290px; margin: 20px; float: left;">
    <h3>Your text</h3>
    <?php
    echo requestPost('message');
    ?>
</div>
<div style="width: 190px; margin: 20px; float: left;">
    <h3>Result</h3>
    <ul>
        <?php
            if($arr):
            foreach ($arr as $key => $item) :
        ?>
        <li>
            <?= "$key - $item шт."; ?>
        </li>
        <?php
            endforeach;
            endif;
        ?>
    </ul>

</div>
</body>
</html>
