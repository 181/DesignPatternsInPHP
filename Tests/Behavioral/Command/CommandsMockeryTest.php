<?php
namespace DesignPatterns\Tests\Behavioral\Command;

use PHPUnit\Framework\TestCase;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use DesignPatterns\Behavioral\Command\LightBulbControl;
use DesignPatterns\Behavioral\Command\TurnOffLightBulb;
use DesignPatterns\Behavioral\Command\TurnOnLightBulb;
use Mockery;

class CommandsMockeryTest extends TestCase
{
	use MockeryPHPUnitIntegration;

	protected $mock;

	public function setUp()
	{
		$this->mock = Mockery::mock('DesignPatterns\Behavioral\Command\LightBulbControl');
	}

	public function tearDown() { Mockery::close(); }

	/** @test */
	public function bulb_can_be_turned_on()
	{
		$this->mock->shouldReceive('turnOn')->once();

		$command = new TurnOnLightBulb($this->mock);
		$command->execute();
	}
	
	/** @test*/
	public function bulb_can_be_turned_off()
	{
		$this->mock->shouldReceive('turnOff')->times(1);

		$command = new TurnOffLightBulb($this->mock);
		$command->execute();
	}
}