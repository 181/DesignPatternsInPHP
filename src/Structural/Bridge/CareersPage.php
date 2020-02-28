<?php
namespace DesignPatterns\Structural\Bridge;

class CareersPage implements WebPage
{
    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }
    public function getContent()
    {
        echo "Careers page in " . $this->theme->getColor() . ".";
    }
}