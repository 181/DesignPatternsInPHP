<?php 
namespace DesignPatterns\behavioral\chainOfRespons;

class Facebook extends Notifier
 {
 	public function publish($message)
 	{
 		echo $message . ' on Facebook; ';
 	}
 }