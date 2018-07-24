<?php 

namespace DesignPatterns\Test\Behavioral\ChainOfRespons;

use DesignPatterns\Behavioral\ChainOfRespons\Facebook;
use DesignPatterns\Behavioral\ChainOfRespons\Twitter;
use DesignPatterns\Behavioral\ChainOfRespons\Pinterest;
use PHPUnit\Framework\TestCase;

class ReceiversTest extends TestCase
{
	public function setUp()
	{
		$notifier = new Twitter();
		$notifier->notifyNext(new Facebook())
		 		 ->notifyNext(new Pinterest());

		$message = 'The Message';
		$notifier->push($message);
	}

	/** @test */
	public function receivers_can_be_notified_with_the_message()
	{
		$expected = 'The Message on Twitter; The Message on Facebook; The Message on Pinterest.';
		$this->expectOutputString($expected);
	}
	
}