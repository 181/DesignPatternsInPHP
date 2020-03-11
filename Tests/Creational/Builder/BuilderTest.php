<?php
namespace DesignPatterns\Tests\Creational\Builder;

use DesignPatterns\Creational\Builder\BurgerBuilder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    /** @test*/
    public function a_buider_can_build_burger_with_its_attributes_passed_in()
    {
        $builder = new BurgerBuilder(14);
        $builder->addCheese();
        $burger = $builder->build(); 

        $this->assertEquals($burger->cheese, true);
    }
}