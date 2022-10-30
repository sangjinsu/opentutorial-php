<?php
$li = ['a', 'b', 'c'];
array_push($li, 'd');
var_dump($li);

array_shift($li);
var_dump($li);

array_push($li, 'a', 'b');
sort($li);
var_dump($li);

rsort($li);
var_dump($li);

?>