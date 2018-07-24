<?php 
namespace DesignPatterns\behavioral\chainOfRespons;

class Twitter extends Notifier
 {
 	public function publish($message)
 	{
 		echo $message . ' on Twitter; ';
 	}
 }