<?php 

namespace DesignPatterns\Tests\Behavioral\Command;

use DesignPatterns\Behavioral\Command\LightBulbControl;
use DesignPatterns\Behavioral\Command\TurnOffLightBulb;
use DesignPatterns\Behavioral\Command\TurnOnLightBulb;
use PHPUnit\Framework\TestCase;

class CommandsTest extends TestCase
{
	/** @test */
	public function the_bulb_can_be_turned_on_and_off()
	{
		$expected = 'LightBulb turned on.' . PHP_EOL . 'LightBulb turned off.';
		$this->expectOutputString($expected);

		$command = new TurnOnLightBulb(new LightBulbControl());
		$command->execute();

		$command = new TurnOffLightBulb(new LightBulbControl());
		$command->execute();
	}
}

