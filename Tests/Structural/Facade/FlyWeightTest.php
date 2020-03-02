<?php
namespace DesignPatterns\Tests\Structural\FlyWeight;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Structural\FlyWeight\TeaShop;
use DesignPatterns\Structural\FlyWeight\TeaMaker;

class FlyWeightTest extends TestCase
{
    /** @test*/ 
    public function new_preference_can_be_saved_to_available_teas()
    {
        $teaMaker = new TeaMaker;
        $shop = new TeaShop($teaMaker);

        $shop->takeOrder('less sugar', 1);
        $shop->serve();

        $this->assertArrayHasKey('less sugar', $teaMaker->availableTea);
        $expected = 'Serving tea to table# 1';
        $this->expectOutputString($expected);
    }
}