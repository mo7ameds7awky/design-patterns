<?php

namespace Mo7am\Patterns\Creational\AbstractFactory2;

class TwigRenderer implements TemplateRenderer
{

    public function render(string $templateString, array $arguments = []): string
    {
        return \Twig::render($templateString, $arguments);
    }
}