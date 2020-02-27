<?php
namespace DesignPatterns\Tests\Structural\Composite;

use Mockery;
use PHPUnit\Framework\TestCase;
use DesignPatterns\Structural\Composite\Designer;
use DesignPatterns\Structural\Composite\Developer;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

class CompositeMockeryTest extends TestCase
{
	use MockeryPHPUnitIntegration;
	
	protected $org;

	public function setUp()
	{
		$this->org = Mockery::mock('DesignPatterns\Structural\Composite\Organization');
	}

	/** @test */
	public function org_can_get_its_employees_net_salaries()
	{
		$this->org->shouldReceive('addEmployee')->times(2)
				  ->shouldReceive('getNetSalaries')->once()->andReturn(27000);
		
		$john = new Developer('John Doe', 12000);
		$jane = new Designer('Jane Doe', 15000);
				  
		$this->org->addEmployee($john);
		$this->org->addEmployee($jane);
		$this->org->getNetSalaries();
	}
}