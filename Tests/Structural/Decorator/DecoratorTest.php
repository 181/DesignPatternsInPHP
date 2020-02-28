<?php
namespace DesignPatterns\Tests\Structural\Decotrator;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Structural\Decorator\MilkCoffee;
use DesignPatterns\Structural\Decotrator\AboutPage;
use DesignPatterns\Structural\Decotrator\DarkTheme;
use DesignPatterns\Structural\Decorator\SimpleCoffee;
use DesignPatterns\Structural\Decotrator\CareersPage;

class DecoratorTest extends TestCase
{
	protected $coffee;
	
	public function setUp()
	{
		$this->coffee = new MilkCoffee(new SimpleCoffee);
	}

	/** @test */
	public function web_pages_can_get_theme_color()
	{
		$this->assertEquals($this->coffee->getCost(), 12); // 12
		$this->assertEquals($this->coffee->getDescription(), 'Simple coffee + milk ');
	}
}