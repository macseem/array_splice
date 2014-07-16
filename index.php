<?php
require_once('array_splice.php');


$var1 = array('a','c','d','e');
$var2 = array('b');
echo 'before:'.PHP_EOL;
var_dump($var1);

$var3 = splice ($var1, -3, -1, $var2);
echo 'after:'.PHP_EOL;
var_dump($var1);
echo 'deleted:'.PHP_EOL;
var_dump($var3);

$var1 = array('a','c','d','e');
$var2 = array('b');
$var3 = array_splice($var1, -3, -1, $var2);
var_dump($var1,$var3);
