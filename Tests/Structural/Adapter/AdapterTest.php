<?php
namespace DesignPatterns\Tests\Structural\Adapter;

use DesignPatterns\Structural\Adapter\WildDog;
use DesignPatterns\Structural\Adapter\WildDogAdapter;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function setUp()
	{
		$wDog = new WildDog();
        $wDogAdapter = new WildDogAdapter($wDog);
        $wDogAdapter->roar();
	}

	/** @test */
	public function wild_dog_adapter_can_roar_like_a_lion()
	{
		$expected = "Wild Dog Bark";
		$this->expectOutputString($expected);
	}
}