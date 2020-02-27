<?php
namespace DesignPatterns\Tests\Structural\Bridge;

use DesignPatterns\Structural\Bridge\AboutPage;
use PHPUnit\Framework\TestCase;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery;

class BridgeMockeryTest extends TestCase
{
	// To integrate Mockery into PHPUnit and avoid having to call the close method and have Mockery remove itself from code coverage reports. Extending \Mockery\Adapter\Phpunit\MockeryTestCase or using the MockeryPHPUnitIntegration trait is the recommended way of integrating Mockery with PHPUnit, since Mockery 1.0.0.
	use MockeryPHPUnitIntegration;

	protected $theme;

	public function setUp()
	{
		$this->theme = Mockery::mock('DesignPatterns\Structural\Bridge\DarkTheme');
	}
	// not needed anymore since Mockery v1.0.0
	// public function tearDown() { Mockery::close(); }

	/** @test */
	public function web_page_can_get_theme_color()
	{
		$this->theme->shouldReceive('getColor')->once()->andReturn('Dark Black Color');

		$aboutPage = new AboutPage($this->theme);
		$aboutPage->getContent();

		$expected = "About page in Dark Black Color.";
		$this->expectOutputString($expected);
	}
}