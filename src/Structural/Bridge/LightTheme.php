<?php
namespace DesignPatterns\Structural\Bridge;

class LightTheme implements Theme
{
    public function getColor()
    {
        return "White Color";
    }
}