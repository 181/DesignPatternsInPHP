<?php

namespace DesignPatterns\Behavioral\Command;

class LightBulbControl
{
    public function __construct()
    {
    }

    public function turnOn()
    {
        echo 'LightBulb turned on.' . PHP_EOL;
    }

    public function turnOff()
    {
        echo 'LightBulb turned off.';
    }
}
