<?php 
namespace DesignPatterns\Behavioral\ChainOfRespons;

class Facebook extends Notifier
 {
 	public function publish($message)
 	{
 		echo $message . ' on Facebook; ';
 	}
 }