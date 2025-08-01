<?php 

class Student {
    public static $grades = ['SD', 'SMP', 'SMA'];
    private static $totalStudent = 0;

    public static function motto() {
        return "Learn PHP OOP - Static Property and Method";
    }

    public static function count() {
        return self::$totalStudent;
    }

    public static function addStudent() {
        return self::$totalStudent++;
    }
}

echo Student::$grades[2]."<br>";
echo Student::motto()."<br>";

// echo Student::$totalStudent."<br>";

echo Student::count()."<br>";
Student::addStudent();
echo Student::count()."<br>";