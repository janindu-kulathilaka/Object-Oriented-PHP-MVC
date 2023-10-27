<?php
class User
{
  public $name;

  public function sayHello()
  {
    return $this->name . ' says Hello';
  }
}

// Instatiate a user object from the User class

$user1 = new User();
$user1->name = 'Janindu';

echo $user1->name;
echo '<br>';
echo $user1->sayHello();
