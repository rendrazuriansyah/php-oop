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

}

$c = new Customer;
$c->firstName = "Rendra";
$c->lastName = "Zuriansyah";

echo $c->fullName();
echo "<hr>";

// cara mengetahui subclass

if (is_subclass_of($c, 'User')) {
    echo "Instance Customer merupakan subclass User.";
}
echo "<hr>";

// cara mengetahui parent class

$parents = class_parents($c);
echo implode(", ", $parents);