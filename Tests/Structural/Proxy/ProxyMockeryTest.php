<?php
namespace DesignPatterns\Tests\Structural\Proxy;

use DesignPatterns\Structural\Proxy\LabDoor;
use DesignPatterns\Structural\Proxy\SecuredDoor;
use Mockery;
use PHPUnit\Framework\TestCase;
use DesignPatterns\Structural\Proxy\TeaShop;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

class ProxyMockeryTest extends TestCase
{
	use MockeryPHPUnitIntegration;

	protected $proxy;
	protected $door;

	public function setUp()
	{
		$this->door = Mockery::mock('DesignPatterns\Structural\Proxy\LabDoor');
		$this->proxy = new SecuredDoor($this->door);
	}

	/** @test */
	public function proxy_with_correct_password_can_open_the_door()
	{
		$this->door->shouldReceive('open')->once();
		$this->proxy->open('xxx');
	}
}