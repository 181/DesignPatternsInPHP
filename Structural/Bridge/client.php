<?php
namespace DesignPatterns\Structural\Bridge;

$darkTheme = new DarkTheme;
$aboutPage = new AboutPage($darkTheme);
$careersPage = new CareersPage($darkTheme);

$aboutPage->getContent(); // "About page in Dark Black Color";
$careersPage->getContent(); // "Careers page in Dark Black Color";

// Bridge pattern is about preferring composition over inheritance. Implementation details(darktheme, or lighttheme) are pushed from a hierarchy (theme hierarchy) to an object(aboutpage, or careerspage) with another hierarchy(webpage hierarchy)