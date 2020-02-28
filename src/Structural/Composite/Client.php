<?php
namespace DesignPatterns\Structural\Composite;

// The intent of a composite is to compose objects into tree structures to represent part-whole hierarchies. Composite pattern lets clients treat the individual objects in a uniform manner.
$john = new Developer('John Doe', 12000);
$jane = new Designer('Jane Doe', 15000);

$org = new Organization;
$org->addEmployee($john);
$org->addEmployee($jane);

echo "Net salaries: " . $org->getNetSalaries();