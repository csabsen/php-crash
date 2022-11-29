<?php

/* --------- Array Functions -------- */
/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['Banana', 'Apple', 'Orange'];

echo count($fruits); 
echo '<br>';


var_dump($fruits);
echo '<br>';
var_dump(in_array('Apple', $fruits));

$fruits[] = 'Peach';

echo '<br>';
var_dump($fruits);

echo '<br>';

array_unshift($fruits, 'Lemon');
var_dump($fruits);

echo '<br>';

// reomve from array

array_pop($fruits);
var_dump($fruits);

echo '<br>';

array_shift($fruits);
var_dump($fruits);

echo '<br>';

unset($fruits[1]);
var_dump($fruits);

echo '<br>';

$chunked_array = array_chunk($fruits, 1);
var_dump($chunked_array);

echo '<br>';

$arr1 = ['a', 'b' ];
$arr2 = ['d', 'e'];

$arr3 = array_merge($arr1, $arr2);
var_dump($arr3);

echo '<br>';
$arr4 = [...$arr1, ...$arr2];
var_dump($arr4);

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);
var_dump($c);

echo '<br>';

$keys = array_keys($c);
var_dump($keys);

echo '<br>';

$flip = array_flip($c);
var_dump($flip);

echo '<br>';

$numbers = range(1, 10);
var_dump($numbers);

echo '<br>';

$newNumber = array_map(function($n) {
  return $n * 2;
}, $numbers);
var_dump($newNumber);

echo '<br>';

$filtered = array_filter($numbers, fn($n) => $n > 5);
var_dump($filtered);

$sum = array_reduce($numbers, fn($carry, $number) => 
  $carry + $number);
var_dump($sum);

echo 'whassdfgsdfgtever';

