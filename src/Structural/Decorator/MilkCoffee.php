<?php
namespace DesignPatterns\Structural\Decorator;

class MilkCoffee implements Coffee
{
    protected $coffee;
    protected $description = ' + milk ';

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }
    
    public function getCost()
    {
        return $this->coffee->getCost() + 2;
    }

    public function getDescription()
    {
        return $this->coffee->getDescription() . $this->description;
    }
}