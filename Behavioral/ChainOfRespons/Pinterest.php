<?php 
namespace DesignPatterns\behavioral\chainOfRespons;

class Pinterest extends Notifier
 {
 	public function publish($message)
 	{
 		echo $message . ' on Pinterest.';
 	}
 }