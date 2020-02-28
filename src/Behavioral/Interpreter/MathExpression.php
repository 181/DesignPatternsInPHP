<?php
namespace DesignPatterns\Behavioral\Interpreter;

interface MathExpression
{
	public function interpret(array $values);
}