<?php

// intinya autoload tuh ngeload class yang ada di folder classes
function myAutoLoad($class) {
    if (preg_match('/\A\w+\Z/', $class)) {
        include 'classes/' . $class . '.php';
    }
}

spl_autoload_register('myAutoLoad');

$student = new Student();
echo $student->name;

echo '<hr>';

$cat = new Cat();
echo $cat->name;