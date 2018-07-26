<?php 
namespace DesignPatterns\Behavioral\Interpreter;
require('../../vendor/autoload.php');

$expression = new Multiply(
	new Literal(5), 
	new Sum(
		new Variable('c'), 
		new Literal(2)
	)
);
// var_dump($expression);
echo $expression->interpret(array('c' => 3));