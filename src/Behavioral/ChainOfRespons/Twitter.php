<?php 
namespace DesignPatterns\Behavioral\ChainOfRespons;

class Twitter extends Notifier
 {
 	public function publish($message)
 	{
 		echo $message . ' on Twitter; ';
 	}
 }