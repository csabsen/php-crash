<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

$age = 17 ;

// if ( $age >= 18 ) {
//   echo 'You are old enough to vote' ;
// } else {
//   echo 'You are not old enough to vote' ;
// }

// $t = date("H");

// if ($t < 10 ) {
//   echo 'Good morning';
// } elseif ($t < 20) {
//   echo 'Good day';
// } else {
//   echo 'Good night';
// }

$posts = ['whatever'];

// if ( !empty($posts) ) {
//   echo $posts[0];
// } else {
//   echo 'There are posts';
// }


/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

// echo !empty($posts) ? $posts[0] : 'There are no posts';

// null coalescing operator
// echo $posts[0] ?? null;

/* -------- Switch Statements ------- */

$favcolor = 'red';

switch($favcolor) {
  case 'red':
    echo 'Your favorite color is red';
    break;
  case 'blue':
    echo 'Your favorite color is blue';
    break;
  case 'green':
    echo 'Your favorite color is green';
    break;
  default:
    echo 'Your favorite color is something else';
}