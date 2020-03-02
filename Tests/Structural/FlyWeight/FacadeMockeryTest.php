<?php
namespace DesignPatterns\Tests\Structural\Facade;

use DesignPatterns\Structural\Facade\ComputerFacade;
use Mockery;
use PHPUnit\Framework\TestCase;
use DesignPatterns\Structural\FlyWeight\TeaShop;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

class FacadeMockeryTest extends TestCase
{
	use MockeryPHPUnitIntegration;

	protected $teaMaker;

	public function setUp()
	{
		$this->computer = Mockery::mock('DesignPatterns\Structural\Facade\Computer')->makePartial();
	}

	/** @test */
	public function facade_can_turn_on_or_off_computer()
	{
		$this->computer->shouldReceive('getElectricShock')->once()
					   ->shouldReceive('closeEverything')->once();

		$facade = new ComputerFacade($this->computer);
		$facade->turnOn();
		$facade->turnOff();

		$expected = 'Beep beep!Loading..Ready to be used!Haaah!Zzzzz'; // no default behavior, echo stirng out, for mocked methods, getElectricShock, and closeEverything
        $this->expectOutputString($expected);
	}
}