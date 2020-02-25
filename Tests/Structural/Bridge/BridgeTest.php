<?php
namespace DesignPatterns\Tests\Structural\Bridge;

use DesignPatterns\Structural\Bridge\AboutPage;
use DesignPatterns\Structural\Bridge\CareersPage;
use DesignPatterns\Structural\Bridge\DarkTheme;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function setUp()
	{
		$theme = new DarkTheme;
		$about = new AboutPage($theme);
		$careers = new CareersPage($theme);
		$about->getContent();
		$careers->getContent();
	}

	/** @test */
	public function web_pages_can_get_theme_color()
	{
		$expected = "About page in Dark Black Color.Careers page in Dark Black Color.";
		$this->expectOutputString($expected);
	}
}