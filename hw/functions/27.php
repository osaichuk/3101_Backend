<?php

$rows = rand(2, 10);
$cols = rand(2, 10);
$colors = ['red','yellow','blue','gray','maroon','brown','green'];

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
    <table>
        <tbody>
            <?php for ($i = 0; $i < $rows; $i++) : ?>
                <tr>
                    <?php for ($j = 0; $j < $cols; $j++) : ?>
                        <td style="background-color: <?= $colors[rand(0, count($colors)-1)]; ?>">
                            <?= rand(0, 9999); ?>
                        </td>
                    <?php endfor ?>
                </tr>
            <?php endfor ?>
        </tbody>
    </table>
</body>
</html>
