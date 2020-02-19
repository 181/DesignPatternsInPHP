<?php 
namespace DesignPatterns\Behavioral\ChainOfRespons;

class Pinterest extends Notifier
 {
 	public function publish($message)
 	{
 		echo $message . ' on Pinterest.';
 	}
 }