<?php
/* ------------- Cookies ------------ */

/*
  Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
*/

setcookie('name', 'Csaba', time() + 86400 * 30);
setcookie('name2', 'JOHN DOE', time() + 86400 * 30);
setcookie('name23', 'JOHN DOE', time() + 86400 * 30);

if( isset($_COOKIE['name'])) {
  var_dump($_COOKIE);

}

setcookie('name2', '', time() - 1);  // to unset cookie
