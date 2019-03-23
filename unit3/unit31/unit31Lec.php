<?php
abstract class Animal {
  private $name, $age;

  // constructor
  public function __construct($x, $y){
    $this -> name = $x;
    $this -> age = $y;
  }

  // getter and setter
  public function __get($var){
    return $this -> $var;
  }

  public function __set($var, $value) {
    $this -> $var = $value;
  }

  public abstract function getNoise(); // polymorphism kicks in with child classes now
}

class Bunny extends Animal { # class definition
    // variables and fields here
    private $name, $age;
    // methods
    // remember we don't need to define variable types in PHP

    public function __construct($x, $y){
      $this -> name = $x;
      $this -> age = $y; # notice how the $ isn't used to access variables
    }

    # getter
    public function __get($var){
      return $this -> $var;
    }

    # setter
    public function __set($var, $value) { # pass in variables or class names as parameters
      $this -> $var = $value;
    }

    public function __toString() {
      return $this -> name . ' is ' . $this -> age . ' years old <br />';
    }

    public function getNoise(){
      return "Snuffle";
    }

  }

  class Dog extends Animal {
    public $role;

    public function __construct($name, $age, $role) {
      parent :: __construct($name, $age);
      $this -> role = $role;
    }

    public function getNoise(){
      return "Bark";
    }
  }

  // creates a bunny object
  $bunny = new Bunny("Hamza", "1");

  // get the name of the bunny (uses __get())
  echo $bunny -> name . "<br />";

  // set the name
  $bunny -> name = "Emile";

  // represents the bunny class through its __toString() method
  $bunny1 = new Bunny("Star", "2");
  echo $bunny1;

  # Debugging tools
  //print_r($bunny); // prints out human readable object information
  //print_r($bunny1); // useful when printing out system state

  //var_dump($bunny1); // prints detailed object information

  // testing an abstract function getNoise()
  echo $bunny -> name . " goes " . $bunny -> getNoise()."<br />";

  $dog1 = new Dog("Shami", 3, "hunting");
  $dog2 = new Dog("Hamza", 4, "fucking");

  echo $dog1 -> name . " is " . $dog1 -> age . " and does " . $dog1 -> role . "<br />";
  echo $dog2 -> name . " is " . $dog2 -> age . " and does " . $dog2 -> role . "<br />";

echo phpinfo();



 ?>
