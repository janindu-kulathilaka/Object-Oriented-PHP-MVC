<?php
class User
{
  private $name;
  private $age;


  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  //custom getter and setter
  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  // __get MAGIC METHOD

  public function __get($property)
  {
    if (property_exists($this, $property)) {
      return $this->$property;
    } else {
      return null;
    }
  }

  public function __set($property, $value)
  {
    if (property_exists($this, $property)) {
      $this->$property = $value;
    }
    return $this;
  }
}

$user1 = new User("Janindu", 21);


// echo $user1->getName();

echo $user1->__get("name");

$user1->__set("name", "Chathumi");
echo $user1->__get("name");
