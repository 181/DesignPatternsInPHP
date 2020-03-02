<?php
namespace DesignPatterns\Tests\Structural\Facade;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Structural\Facade\Computer;
use DesignPatterns\Structural\Facade\ComputerFacade;

class FacadeTest extends TestCase
{
    /** @test*/ 
    public function computer_can_be_turned_on_or_off_by_facade()
    {
        $computer = new Computer;
        $facade = new ComputerFacade($computer);

        $facade->turnOn(); // Ouch! Beep beep! Loading.. Ready to be used!
        $facade->turnOff(); // Bup bup buzzz! Haah! Zzzzz
        $expected = 'Ouch!Beep beep!Loading..Ready to be used!Bup bup bup buzzzz!Haaah!Zzzzz';
        $this->expectOutputString($expected);
    }
}