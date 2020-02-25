<?php
namespace DesignPatterns\Structural\Bridge;

class AboutPage implements WebPage
{
    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }
    public function getContent()
    {
        echo "About page in " . $this->theme->getColor() . ".";
    }
}