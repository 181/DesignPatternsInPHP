<?php
namespace DesignPatterns\Structural\Facade;

use DesignPatterns\Structural\Facade\Computer;
use DesignPatterns\Structural\Facade\ComputerFacade;

/**
 * Facade provides a simplified interface to a complex subsystem
 * Wiki: a facade is an object that provides a simplified interface to a larger body of code, such as a class library
 * 
 */
$computer = new ComputerFacade(new Computer());
$computer->turnOn();
$computer->turnOff();