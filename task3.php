<?php

$input = trim(fgets(STDIN));
$arr = explode(" ", $input);
$arr = array_count_values($arr);
echo max($count);

?>
