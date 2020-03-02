<?php
namespace DesignPatterns\Tests\Structural\Proxy;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Structural\Proxy\SecuredDoor;
use DesignPatterns\Structural\Proxy\LabDoor;

class ProxyTest extends TestCase
{
    protected $proxy;
    
    public function setUp() {
        $this->proxy = new SecuredDoor(new LabDoor); 
    }
    
    /** @test*/ 
    public function a_proxy_with_correct_password_can_open_the_door()
    {
        $this->proxy->open('xxx'); // 

        $expected = 'Opening lab door';
        $this->expectOutputString($expected);
    }

    /** @test*/ 
    public function a_proxy_can_not_open_the_door_without_correct_password() {
        $this->proxy->open('invalid'); // Big no! It ain't possible

        $expected = 'Big no! It ain\'t possible';
        $this->expectOutputString($expected);
    }

    /** @test*/ 
    public function a_proxy_can_close_the_door() {
        $this->proxy->close(); // Closing lab door

        $expected = 'Closing lab door';
        $this->expectOutputString($expected);
    }
}