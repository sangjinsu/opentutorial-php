<?php
$grades = array('sang'=>10, 'asd'=>6);
var_dump($grades);

$grades = [];
$grades['hi'] = 'hello';
var_dump($grades);

foreach ($grades as $key => $value) {
    echo "key: {$key} value: {$value}<br />";
}
?>