<?php


/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Brad';
$age = 40;
$has_kids = true;
$cash_on_hands = 20.75;


// var_dump($cash_on_hands);

// echo $name . ' is ' . $age . ' years old';
// echo "$name is $age years old";

// php will recognize the datatype and allow you to use the correct operator

$x =  '5' + '5';
// will be an integer

var_dump($x);

echo 10 - 5;

// create constant HOSTNAME and set it to localhost
define('HOSTNAME', 'localhost');

echo HOSTNAME;


