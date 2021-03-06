<?php

namespace DesignPatterns\Behavioral\Command;

class TurnOffLightBulb implements LightBulbCommand
{

    private $lightBulbControl;

    public function __construct(LightBulbControl $lightBulbControl)
    {
        $this->lightBulbControl = $lightBulbControl;
    }

    public function execute()
    {
        // return $this->lightBulbControl->turnOff();
        $this->lightBulbControl->turnOff();
    }
}
