<?php
namespace DesignPatterns\Structural\FlyWeight;
// Acts as a factory and saves the tea
class TeaMaker
{
    public $availableTea = [];

    public function make($preference)
    {
        if(empty($this->availableTea[$preference])) {
            $this->availableTea[$preference] = new KarakTea();
        }

        return $this->availableTea[$preference];
    }

    public function getAvailableTea() {
       return $this->availableTea;
    }
}

