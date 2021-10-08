<?php

class Person {
  public $name;
  public $gender;
  public $age;

  public $type;

  public function get_name(){
    echo "Name: " . $this->name . "\n";
  }

  public function get_gender(){
    echo "Gender: " . $this->gender . "\n";
  }

  public function get_age(){
    echo "Age: " . $this->age . "\n";
  }

  public function get_type(){
    echo "Type: " . $this->type . "\n";
  }
}

class Player extends Person {
  public function __construct($dialogue){
    $this->type = "Player";
  }
}

class NPC extends Person {
  // 對白
  public $dialogue;

  public function __construct($dialogue){
    $this->type = "NPC";
    $this->dialogue = $dialogue;
  }

  public function speak(){
    if ($this->gender == "M") {
      if ($this->age >= 15) {
        echo "Yooooooo! this is $this->name\n";
      } else {
        echo "Hello... $this->dialogue\n";  
      }
    } else {
      echo "你好... 我係 $this->name\n";
    }

  }

  public function bye(){
    echo "Bye... $this->dialogue\n";
  }
}

$sam = new NPC("I am Sam!");
$sam->name = "澄";
$sam->gender = "M";
$sam->age = 14;

$ocean = new NPC("I am Ocean!");
$ocean->name = "洋";
$ocean->gender = "F";
$ocean->age = 14;

// $sam->get_name();
// $sam->get_gender();
// $sam->get_age();
// $sam->get_type();
// NPC only
$sam->speak();
$ocean->speak();
// $ocean->speak("");