<?php

namespace Mo7am\Patterns\Creational\AbstractFactory2;

class TwigTitleTemplate implements TitleTemplate
{

    public function getTemplateString(): string
    {
        return "<h1>{{ title }}</h1>";
    }
}