<?php
namespace DesignPatterns\Structural\Adapter;

class WildDog implements Dog
{
    public function bark()
    {
        echo "Wild Dog Bark";
    }
}