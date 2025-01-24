<?php
class Student {
    var $nama;
    var $country = 'None';

    function sayHello() {
        return 'Hello World';
    }
}

// masing" student memiliki class yang sama
$student1 = new Student;
$student2 = new Student;

$student1->nama = 'Rendra';
$student2->nama = 'Vira';

echo $student1->nama."<br>";
echo $student2->nama."<br>";
echo "<hr>";

echo $student1->sayHello()."<br>";
echo $student2->sayHello()."<br>";
echo "<hr>";

$class_methods = get_class_methods('Student');
echo "Method milik Student: ";
echo "<pre>";
print_r($class_methods);
echo "</pre>";
echo "<hr>";

if (method_exists('Student', 'sayHello')) {
    echo "Method sayHello tersedia.";
} else {
    echo "Method sayHello tidak tersedia.";
}