<?php
$var = "world";
$$var = 100;
echo 'Hello $var<br>';
echo "Hello $var<br>";
echo 'Hello $world<br>';
echo "Hello $world<br>";

$n = 12;
echo "You are the $nth person<br>";
echo "You are the {$n}th person<br><br>";
//You are the 12th person

$a = 3;
$b = '3';
$c = 5;
var_dump($a == $b);
var_dump($a === $b);
var_dump($a != $b);
var_dump($a !== $b);
var_dump($a == $c);
var_dump($a <> $c);
 ?>
