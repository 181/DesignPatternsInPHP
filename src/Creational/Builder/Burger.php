<?php
namespace DesignPatterns\Creational\Builder;

class Burger  
{
    public $size;
    public $cheese = false;
    public $pepperoni = false;
    public $lettuce = false;
    public $tomato = false;

    public function __construct(BurgerBuilder $burgerBuilder) {
        $this->size = $burgerBuilder->size;
        $this->cheese = $burgerBuilder->cheese;
        $this->pepperoni = $burgerBuilder->pepperoni;
        $this->lettuce = $burgerBuilder->lettuce;
        $this->tomato = $burgerBuilder->tomato;
    }
}
