<?php

class Car
{
    public static $name = 'Toyota';

    public static function drive()
    {
        return 'Drive';
    }
}

echo Car::$name;
echo Car::drive();