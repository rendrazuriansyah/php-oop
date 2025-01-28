<?php

class Student {
    public static $instanceCount = 0;
    
    public function __construct() { // akan dijalankan secara default ketika membuat instance dari class ini
        self::$instanceCount++;
    }
}

class Elementary extends Student {
    public $total = 3;
}

class Junior extends Student {
    public $total = 2;
}

class Senior extends Student {
    public $total = 4;
}

echo "Instance Count: ".Student::$instanceCount;
echo "<hr>";

$elementary = new Elementary; // $instanceCount = 1;
echo "Elementary: {$elementary->total}";
echo "<br>";

$junior = new Junior; // $instanceCount = 2;
echo "Junior: {$junior->total}";
echo "<br>";

$senior = new Senior; // $instanceCount = 3..... dst;
echo "Senior: {$senior->total}";
echo "<br>";

echo "<hr>";
echo "Instance Count: ".Student::$instanceCount;