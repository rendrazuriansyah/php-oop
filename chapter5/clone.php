<?php

class Prouduct {
    public $color;

    public function __construct() {
        echo "New product was created. <br>";
    }

    public function __clone() { // menambhakan fungsi lebih magic method clone
        echo "New product was cloned. <br>";
    }
}

$shirt1 = new Prouduct;
$shirt1->color = "Blue";

$shirt2 = clone $shirt1; // magic method clone bekerja ketika dipanggil

echo $shirt1->color;
echo "<br>";
echo $shirt2->color;

echo "<hr>";

$shirt2->color = "Red";

echo $shirt1->color;
echo "<br>";
echo $shirt2->color;