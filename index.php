<?php
include_once 'Stack.php';
echo '<pre>';
$new1 = new Stack(5);
$new1->push(5);
$new1->push(7);
$new1->push(34);
$new1->push(66);
$new1->push(100);

$new1->pop();
$new1->pop();
$new1->pop();

$new1->push('nam');
$new1->push('thao');

echo $new1->isEmpty();
echo '<br>';
$new1->pop();
$new1->pop();
$new1->pop();
$new1->pop();

print_r($new1);