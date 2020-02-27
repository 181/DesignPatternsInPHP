<?php

namespace DesignPatterns\Tests\Structural\Composite;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Structural\Composite\Designer;
use DesignPatterns\Structural\Composite\Developer;
use DesignPatterns\Structural\Composite\Organization;

class CompositeTest extends TestCase
{
	protected $org;

	public function setUp()
	{
		$john = new Developer('John Doe', 12000);
		$jane = new Designer('Jane Doe', 15000);

		$this->org = new Organization;
		$this->org->addEmployee($john);
		$this->org->addEmployee($jane);
	}

	/** @test */
	public function organization_can_get_its_employees_net_salaries()
	{
		$this->assertEquals($this->org->getNetSalaries(), 27000);
	}
}
