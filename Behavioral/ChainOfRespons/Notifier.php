<?php 
namespace DesignPatterns\behavioral\chainOfRespons;

abstract class Notifier
{
	private $nextNotifier = null;

	public function notifyNext(Notifier $notifier)
	{
		$this->nextNotifier = $notifier;
		return $this->nextNotifier;
	}

	final public function push($message)
	{
		$this->publish($message);

		if ($this->nextNotifier !== null) {
			$this->nextNotifier->push($message);
		}
	}

	abstract protected function publish($message);
}