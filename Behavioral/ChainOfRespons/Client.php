<?php 
namespace DesignPatterns\Behavioral\ChainOfRespons;

require('../../vendor/autoload.php');

$notifier = new Twitter();
$notifier->notifyNext(new Facebook())
		 ->notifyNext(new Pinterest());
$notifier->push('Awsome new product available now!');