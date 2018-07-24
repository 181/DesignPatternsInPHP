<?php

namespace DesignPatterns\Behavioral\Command;

class TurnOnLightBulb implements LightBulbCommand
{

    private $lightBulbControl;

    public function __construct(LightBulbControl $lightBulbControl)
    {
        $this->lightBulbControl = $lightBulbControl;
    }

    public function execute()
    {
        $this->lightBulbControl->turnOn();
    }
}
