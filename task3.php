<?php

#поток ввода
$input = trim(fgets(STDIN));
#делим на массив строк
$arr = explode(" ", $input);
#считаем колличество включений каждого элемента
$arr = array_count_values($arr);
#выбираем наибольшее и выводим
echo max($count);

?>
