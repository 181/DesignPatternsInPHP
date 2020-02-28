<?php
namespace DesignPatterns\Structural\Adapter;

/**
 * Adapter pattern lets you wrap an otherwise incompatible object in an adapter,
 * to make it compatible with another class
 */
class WildDogAdapter implements Lion
{
    public $wDog;

    public function __construct(WildDog $wDog)
    {
        $this->wDog = $wDog;
    }
    
    public function roar()
    {
        return $this->wDog->bark();
    }
}