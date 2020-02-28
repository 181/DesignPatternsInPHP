<?php
namespace DesignPatterns\Behavioral\Interpreter;

class Variable implements MathExpression
{
	private $char;

	public function __construct($char)
	{
		$this->char = $char;
	}

	public function interpret(array $values)
	{
		return $values[$this->char];
	}

}