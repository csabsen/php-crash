<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
  // properties are attributes that belong to a class

  public $name;
  private $email;
  public $password;

  // constructor, when init with new

  public function __construct($name, $email, $password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }
  

  // Method is a function that belongs to a class
  function set_name($name) {
    $this->name = $name;
  }

  function get_name() {
    echo $this->name;
  }
}

$user1 = new User('csaba', 'csabsen@gmail.com', 'password');

$user1->set_name('Csaba');


var_dump($user1);
echo '<br>';
$user1->get_name();
echo '<br>';


// Inheritence

class Employee extends User {
  public function __construct($name, $email, $password, $title )
  {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function get_title() {
    echo $this->title;
  }
  
}

$user3 = new Employee('einstein', 'einstein@gmail.com', '123', 'master');

var_dump($user3);