<?php
namespace DesignPatterns\Creational\Builder;

$burger = (new BurgerBuilder(14))->addPepperoni()->addLettuce()->addTomato()->build();