<?php
class Student {
    // Properties
}

// masing" student memiliki class yang sama
$student1 = new Student;
$student2 = new Student;

$classes = get_declared_classes();
echo "Classes: ".implode(', ', $classes)."<br>"; 
echo "<hr>";

$classNames = ['Product', 'Student', 'student'];
foreach ($classNames as $className) {
    if (class_exists($className)) {
        echo "{$className} class ada. <br>";
    } else {
        echo "{$className} class tidak ada. <br>";
    }
}