<?php
namespace DesignPatterns\Behavioral\Interpreter;

class Sum implements MathExpression
{
	private $x;
	private $y;

	public function __construct(MathExpression $x, MathExpression $y)
	{
		$this->x = $x;
		$this->y = $y;
	}

	public function interpret(array $values)
	{
		return $this->x->interpret($values) + $this->y->interpret($values);
	}
}