<?php

$age = rand(0, 100);
echo "Ваш возвраст $age. <br/>";
if ($age >= 18 && 59 >= $age) {
    echo 'Вам еще работать и работать';
} elseif ($age > 59) {
    echo 'Вам пора на пенсию';
} elseif ($age >=0 && 17 >= $age) {
    echo 'Вам еще рано работать';
}