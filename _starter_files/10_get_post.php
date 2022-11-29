<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

var_dump($_GET);


echo '<br/>';

var_dump($_POST);
echo '<br/>';

?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name= Csaba&age=442&whatdufuck=whatdufuck"> CLICK</a>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" >
  <div>
    <label for="name">Name</label>
    <input type="text" name="name">
  </div>
  <div>
    <label for="age">Age</label>
    <input type="text" name="age">
  </div>
  <input type="submit" value="Submit" name="submit">
</form>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
  <div>
    <label for="gender">Gender</label>
    <input type="text" name="gender">
  </div>
  <div>
    <label for="pet">Pet</label>
    <input type="text" name="pet">
  </div>
  <input type="submit" value="Submit" name="submit">
</form>