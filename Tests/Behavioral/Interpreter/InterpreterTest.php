<?php
namespace DesignPatterns\Tests\Behavioral\Interpreter;

use DesignPatterns\Behavioral\Interpreter\Literal;
use DesignPatterns\Behavioral\Interpreter\Multiply;
use DesignPatterns\Behavioral\Interpreter\Variable;
use DesignPatterns\Behavioral\Interpreter\Sum;
use PHPUnit\Framework\TestCase;

class InterpreterTest extends TestCase
{
	/** @test */
	public function an_expression_can_be_interpreted_to_a_value()
	{
		$expression = new Multiply(
	        new Literal(5), 
	        new Sum(
		       new Variable('c'), 
		       new Literal(2)
	        )
        );

        $this->assertEquals(25, $expression->interpret(array('c' => 3)));
	}
}

// vendor/bin/phpunit --filter InterpreterTest  --testdox