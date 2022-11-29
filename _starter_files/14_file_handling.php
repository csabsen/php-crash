<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

$file = '../extras/users.txt';
$new_file = '../extras/test.txt';
echo 'im there';

echo '<br>';
var_dump(file_exists($file));

if( file_exists($file)) {
  $handle = fopen($file, 'r');
  $contents = fread($handle, filesize($file));
  fclose($handle);
  echo $contents;
} elseif ( !file_exists($new_file)) {
  
  $handle = fopen($new_file, 'w');
  $contents = 'test' . PHP_EOL . 'test' . PHP_EOL . 'test';
  fwrite($handle, $contents);
  fclose($handle);
}