<?php
class User1
{
  public $name;

  public function sayHello()
  {
    return $this->name . ' says Hello';
  }
}

// Instatiate a user object from the User class

$user1 = new User1();
$user1->name = 'Janindu';

echo $user1->name;
echo '<br>';
echo $user1->sayHello();
