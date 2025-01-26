<?php
class User {
    var $firstName;
    var $lastName;
    var $userName;

    function fullName() {
        return $this->firstName." ".$this->lastName;
    }
}

class Customer extends User {
    var $city;
    var $country;

    function location() {
        return $this->city.', '.$this->country;
    }

    function fullName() {
        return $this->firstName." ".$this->lastName." (Customer)";
    }
}

$u = new User;
$u->firstName = "Nisrina";
$u->lastName = "Kamila";
echo $u->fullName() . "<br>";
echo "<hr>";

$c = new Customer;
$c->firstName = "Rendra";
$c->lastName = "Zuriansyah";
$c->city = "Tangerang Selatan";
$c->country = "Indonesia";

echo $c->fullName() . "<br>";
echo $c->location() . "<br>";
echo "<hr>";

// cara mengetahui subclass

if (is_subclass_of($c, 'User')) {
    echo "Instance Customer merupakan subclass User.";
}
echo "<hr>";

// cara mengetahui parent class

$parents = class_parents($c);
echo implode(", ", $parents);