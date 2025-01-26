<?php
class User {
    public $firstName;
    public $lastName;
    public $userName;

    protected $regID = 1001;
    protected $level = 'User';

    public function fullName() {
        return $this->firstName." ".$this->lastName;
    }

    protected function sayProtect() {
        return "Hello, Protected.";
    }

    private function sayPrivate() {
        return "Hello, Private.";
    }

    public function sayMe() {
        return $this->sayPrivate();
    }
}

class Customer extends User {
    public function sayParent() {
        return $this->sayProtect();
    }
}

$u = new User;
$u->firstName = "User";
$u->lastName = "Class";
// echo $u->regID."<br>";
// echo $u->level."<br>";
echo $u->fullName()."<br>";
// echo $u->sayProtect()."<br>";
// echo $u->sayPrivate()."<br>";
echo $u->sayMe()."<br>";

echo "<hr>";

$c = new Customer;
$c->firstName = "Customer";
$c->lastName = "Class";
echo $c->fullName()."<br>";
echo $c->sayParent()."<br>";

echo "<hr>";


// intinya encapsulation bisa diakses sesuai ketentuan masing-masing class, seperti public, protected, dan private.
// - public bisa diakses oleh semua class, 
// - protected hanya bisa diakses oleh subclass, dan 
// - private hanya bisa diakses oleh class itu sendiri