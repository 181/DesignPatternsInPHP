<?php
namespace DesignPatterns\Structural\Bridge;

// the WebPage hierarchy 
interface WebPage
{
    public function __construct(Theme $theme);
    public function getContent();
}