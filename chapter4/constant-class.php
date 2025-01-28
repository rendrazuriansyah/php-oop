<?php

class Time {
    public const DAY_IN_SECONDS = 60 * 60 * 24;

    public function tomorrow() {
        return time() + self::DAY_IN_SECONDS;
    }
}

echo Time::DAY_IN_SECONDS."<br>";

$clock = new Time;
echo $clock->tomorrow()."<br>";