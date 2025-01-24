<?php
class Student {
    var $nama;
    var $country = 'None';
}

// masing" student memiliki class yang sama
$student1 = new Student;
$student2 = new Student;

$student1->nama = 'Rendra';
$student2->nama = 'Vira';

echo $student1->nama."<br>";
echo $student2->nama."<br>";
echo "<hr>";

$class_vars = get_class_vars('Student');
echo "Properti milik Student: ";
echo "<pre>";
print_r($class_vars);
echo "</pre>";
echo "<hr>";

if (property_exists('Student', 'nama')) {
    echo "Property 'nama' tersedia.";
} else {
    echo "Property 'nama' tidak tersedia.";
}