<?php
namespace DesignPatterns\Tests\Structural\Decotrator;

use DesignPatterns\Structural\Decorator\MilkCoffee;
use PHPUnit\Framework\TestCase;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery;

class DecoratorMockeryTest extends TestCase
{
	use MockeryPHPUnitIntegration;

	protected $coffee;

	public function setUp()
	{
		$this->coffee = Mockery::mock('DesignPatterns\Structural\Decorator\SimpleCoffee');
	}

	/** @test */
	public function simple_coffee_cost_can_be_added_to_ordered_product()
	{
		$this->coffee->shouldReceive('getCost')->once()->andReturn(10);

		$cost = (new MilkCoffee($this->coffee))->getCost();
		$this->assertEquals($cost, 12);
	}
}