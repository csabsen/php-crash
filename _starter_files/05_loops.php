<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for ($i = 0; $i < 10; $i++) { 
//   echo $i . '<br>';
// }


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

// $x = 1;

// while($x <= 10) {
//   echo $x . '<br>';
//   $x++;
// };



/* ---------- Do While Loop --------- */


/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/
$x = 19 ;

// do {
//   echo 'Number: ' . $x . '<br>';
//   $x++;
// } while ($x <= 10);


/* ---------- Foreach Loop ---------- */

$posts = [ 'First Post', 'Second Post', 'Third Post' ];

// for( $i = 0; $i < count($posts); $i++){
//   echo $posts[$i] . '<br>';
// }

foreach($posts as $post) {
  echo $post . '<br>';
}

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/
