<?php

namespace Mo7am\Patterns\Creational\Tests;

use Mo7am\Patterns\Creational\AbstractFactory\BMWCar;
use Mo7am\Patterns\Creational\AbstractFactory\CarAbstractFactory;
use Mo7am\Patterns\Creational\AbstractFactory\FiatCar;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateBMWCar()
    {
        $carFactory = new CarAbstractFactory(1000);
        $myNewCar = $carFactory->createBMWCar();
        $this->assertInstanceOf(BMWCar::class, $myNewCar);
    }

    public function testCanCreateFiatCar()
    {
        $carFactory = new CarAbstractFactory(1000);
        $myNewCar = $carFactory->createFiatCar();
        $this->assertInstanceOf(FiatCar::class, $myNewCar);
    }
}