
<?php

/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = 'hello world'; 

echo strlen($string);
echo '<br/>';

echo strpos($string, 'o');
echo '<br/>';

echo strrpos($string, "o");
echo '<br/>';

echo strrev($string);
echo '<br/>';

echo strtoupper($string);
echo '<br/>';

echo ucwords($string);
echo '<br/>';

echo str_replace('world', 'Everyone', $string);
echo 'YES';

echo '<br/>';

if (str_starts_with($string, 'hello')) {
  echo 'YES';
}
echo '<br/>';

if (str_ends_with($string, 'ld')) {
  echo "endswith ld";
}

echo '<br/>';

$string2 = '<script>alert(1)</script>';
echo htmlspecialchars($string2);
echo '<br/>';

printf('%s likes to %s', 'Brad', 'code');

echo '<br/>';

printf('1+1=%d', 1+1);
