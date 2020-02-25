<?php
namespace DesignPatterns\Structural\Bridge;

class DarkTheme implements Theme
{
    public function getColor()
    {
        return "Dark Black Color";
    }
}