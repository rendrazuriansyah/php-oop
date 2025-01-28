<?php

class Student {
    public static $instanceCount = 0;
    
    public $total;
    public $target;

    // public function __construct($total, $target) { // gapunya nilai argument default jika gada
    //     self::$instanceCount++;
    //     $this->total = $total;
    //     $this->target = $target;
    // }

    public function __construct($args = []) { // punya nilai argument default jika gada
        self::$instanceCount++;
        $this->total = $args['total'] ?? $this->total;
        $this->total = $args['target'] ?? $this->target;
    }
}

class Elementary extends Student {
    public $total = 3;
    public $target = 2;
}

class Junior extends Student {
    public $total = 2;
    public $target = 1;
}

class Senior extends Student {
    public $total = 4;
    public $target = 3;
}

echo "Instance Count: ".Student::$instanceCount;
echo "<hr>";

// $elementary = new Elementary(2, 1); // $instanceCount = 1;
// echo "Elementary: {$elementary->total}, {$elementary->target}";
// echo "<br>";

// $junior = new Junior(4, 2); // $instanceCount = 2;
// echo "Junior: {$junior->total}, {$junior->target}";
// echo "<br>";

// $senior = new Senior(5, 3); // $instanceCount = 3..... dst;
// echo "Senior: {$senior->total}, {$senior->target}";
// echo "<br>";

// 

$elementary = new Elementary(['total'=>2, 'target'=>1]); // $instanceCount = 1;
echo "Elementary: {$elementary->total}, {$elementary->target}";
echo "<br>";

$junior = new Junior(['total'=>4, 'target'=>2]); // $instanceCount = 2;
echo "Junior: {$junior->total}, {$junior->target}";
echo "<br>";

$senior = new Senior(['total'=>5, 'target'=>3]); // $instanceCount = 3..... dst;
echo "Senior: {$senior->total}, {$senior->target}";
echo "<br>";

//

echo "<hr>";
echo "Instance Count: ".Student::$instanceCount;