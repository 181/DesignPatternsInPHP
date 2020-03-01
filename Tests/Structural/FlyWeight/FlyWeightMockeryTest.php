<?php
namespace DesignPatterns\Tests\Structural\FlyWeight;

use Mockery;
use PHPUnit\Framework\TestCase;
use DesignPatterns\Structural\FlyWeight\TeaShop;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

class FlyWeightMockeryTest extends TestCase
{
	use MockeryPHPUnitIntegration;

	protected $teaMaker;

	public function setUp()
	{
		$this->teaMaker = Mockery::mock('DesignPatterns\Structural\FlyWeight\TeaMaker')->makePartial();
	}

	/** @test */
	public function tea_maker_can_make_tea()
	{
		$this->teaMaker->shouldReceive('make')->once()->with('less sugar');

		$shop = new TeaShop($this->teaMaker);
		$shop->takeOrder('less sugar', 1);
		$shop->serve();
		// $this->assertArrayHasKey('less sugar', $this->teaMaker->getAvailableTea()); // won't work this way
		$expected = 'Serving tea to table# 1';
        $this->expectOutputString($expected);
	}
}