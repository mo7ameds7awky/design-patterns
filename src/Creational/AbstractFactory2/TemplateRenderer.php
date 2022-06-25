<?php

namespace Mo7am\Patterns\Creational\AbstractFactory2;

interface TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;
}