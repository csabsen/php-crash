<?php
/* --- Sanitizing Inputs -- */

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/

if (isset($_GET['submit'])) {
  $name = htmlspecialchars( $_GET['name']);
  echo $_GET['age'];   // that'll run script
  echo $name;          // that'll wont
}

if (isset($_POST['submit'])) {
  echo $_POST['gender'];       // that'll run script
  echo "<br/>";
  $gender = filter_input( INPUT_POST, 'gender', FILTER_SANITIZE_SPECIAL_CHARS);
  echo $gender;                // that'll wont

}
  


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