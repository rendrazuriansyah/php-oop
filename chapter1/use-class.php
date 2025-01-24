<?php
class Student {
    var $firstname;
    var $lastname;

    var $country = 'None';

    function sayHello() {
        return 'Hello World';
    }

    function fullName() {
        return $this->firstname." ".$this->lastname;
    }
}

// masing" student memiliki class yang sama
$student1 = new Student;

$student1->firstname = 'Rendra';
$student1->lastname = 'Zuriansyah';

echo $student1->firstname."<br>";
echo $student1->lastname."<br>";
echo "<hr>";

echo $student1->sayHello()."<br>";
echo $student1->fullName()."<br>";
echo "<hr>";

$class_methods = get_class_methods('Student');
echo "Method milik Student: ";
echo "<pre>";
print_r($class_methods);
echo "</pre>";
echo "<hr>";

if (method_exists('Student', 'fullName')) {
    echo "Method fullName tersedia.";
} else {
    echo "Method fullName tidak tersedia.";
}