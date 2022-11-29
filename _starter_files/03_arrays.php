<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

// $numbers = [1, 2, 3, 4, 5];
// $fruits = array('Apple', 'Banana', 'Orange');

// print_r($fruits);

// associative array, you can set the index yourself

$color = [
  4 => 'red',
  7 => 'blue',
  2 => 'green',
];

// echo $color[7];

$hex = [
  'red' => '#f00',
  'blue' => '#00f',
  'green' => '#0f0',
];


// echo $hex['blue'];

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',  
];

// echo $person['first_name'];

$people = [
  [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com',
    'age' => 30,
    'cash_on_hand' => 100.50,
  ], 
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@gmail.com',
  ],
  [
    'first_name' => 'janet',
    'last_name' => 'williams',
    'email' => 'janet@gmail.com',
  ],
];

// var_dump($people);

// echo $people[2]['first_name'];


// var_dump(json_encode($people));

// opposite would be json_decode to convert json to array