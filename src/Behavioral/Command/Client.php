<?php 
namespace DesignPatterns\Behavioral\Command;
require('../../vendor/autoload.php');

// echo __NAMESPACE__;
$command = new TurnOnLightBulb(new LightBulbControl());
$command->execute();

$command = new TurnOffLightBulb(new LightBulbControl());
$command->execute();