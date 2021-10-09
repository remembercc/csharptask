<?php

class Person {
  public $name;
  public $gender;
  public $age;

  public $type;

  public function setter($attr, $value) {
    $this->{$attr} = $value;
  }

  public function getter($attr) {
    if (isset($this->{$attr})) {
      return $attr . ": " . $this->{$attr};
    }
    return null;
  }
}

class Player extends Person {
  /**
   * Construction
   */
  public function __construct(){
    $this->type = "Player";
  }


  /**
   * Player Speaking
   * 
   * @return String
   */
  public function speak(){
    return <<<NPC
    > Hello, I am $this->name,
    > I am $this->age years-old and I am a $this->gender.
    > I am a Game Player so I don't have any catchphrase! Yooooooooooooooo!
    NPC;
  }
}

class NPC extends Person {
  // 口頭蟬
  public $catchphrase;


  /**
   * Construction
   */
  public function __construct(){
    $this->type = "NPC";
  }


  /** 
   * Set NPC's catchphrase
   * 
   * @param string str
   * @return null
   */
  public function set_catchphrase($str){
    $this->catchphrase = $str;
  }

  /**
   * NPC Speaking
   * 
   * @return String
   */
  public function speak(){
    return <<<NPC
    > Hello, I am $this->name,
    > I am $this->age years-old and I am a $this->gender.
    > My catchphrase is: $this->catchphrase!
    NPC;
  }

  /**
   * NPC says bye bye 
   * 
   * @return String 
   */
  public function bye(){
    return "Bye... $this->dialogue";
  }
}

$sam = new NPC();
$sam->setter("name", "澄");
$sam->setter("gender", "Male");
$sam->setter("age", 15);

// $sam->set_catchphrase("thi");

// $ocean = new NPC();
// $ocean->name = "洋";
// $ocean->gender = "F";
// $ocean->age = 14;

// $sam->get_name();
// $sam->get_gender();
// $sam->get_age();
// $sam->get_type();
// NPC only
echo $sam->speak() . "\n";
// $ocean->speak("");


echo $sam->getter("gender") . "\n";