<?php
namespace DesignPatterns\Structural\Decorator;

use DesignPatterns\Structural\Decorator\MilkCoffee;
use DesignPatterns\Structural\Decorator\SimpleCoffee;
use DesignPatterns\Structural\Decorator\VanillaCoffee;

// Decorator pattern lets you dynamically change the behavior of an object at run time
// by wrapping them in an object of a decorator class
// Wiki: the decorator pattern allows behavior to be added to an individual object, either statically 
// or dynamically, without affecting the behavior of other objects from the same class.

$someCoffee = new SimpleCoffee();
echo $someCoffee->getCost(); // 10
echo $someCoffee->getDescription(); // Simple Coffee

$someCoffee = new MilkCoffee($someCoffee);
echo $someCoffee->getCost(); // 12
echo $someCoffee->getDescription(); // Simple Coffee, milk

$someCoffee = new VanillaCoffee($someCoffee);
echo $someCoffee->getCost(); // 20
echo $someCoffee->getDescription(); // Simple Coffee, milk, vanilla
