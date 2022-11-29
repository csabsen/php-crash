<?php
 
// echo = OUtput strings numbers html etc
echo 'sdf hello', 123, 10.5 ; 
// print = Works like , but can only output one thing

// print 123;
  
// print_r = Gives a bit more info. Can be used to print arrays

// print_r([1, 2, 3]);
 
// var_dump = Even more info like data type and length

var_dump([1, 2, 3]);

// var_export = Similar to var_dump, but can be used in expressions

var_export('Hello');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1><?= 'Post One'; ?></h1>
</body>
</html>