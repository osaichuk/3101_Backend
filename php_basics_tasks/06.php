<?php

$age = rand(1, 100);
echo "Ваш возвраст $age. <br/>";
if ($age >= 18 && 59 >= $age) {
    echo 'Вам еще работать и работать';
} elseif ($age > 59) {
    echo 'Вам пора на пенсию';
}