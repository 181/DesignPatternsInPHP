<?php
namespace DesignPatterns\Structural\Decorator;

use DesignPatterns\Structural\Decorator\Coffee;

class VanillaCoffee implements Coffee
{
    protected $coffee;
    protected $description = " + Vanilla ";

    public function __construct(Coffee $coffee) {
        $this->coffee = $coffee;
    }

    public function getCost()
    {
        return $this->coffee->getCost() + 5;
    }

    public function getDescription()
    {
        return $this->coffee->getDescription() . $this->description;
    }
}
