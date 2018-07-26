<?php
namespace DesignPatterns\Behavioral\Interpreter;

class Literal implements MathExpression
{
	private $value;

	public function __construct($value)
	{
		$this->value = $value;
	}

	public function interpret(array $values)
	{
		return $this->value;
	}

}