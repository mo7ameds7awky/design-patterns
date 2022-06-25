<?php

namespace Mo7am\Patterns\Creational\AbstractFactory;

class CarAbstractFactory
{
    private $price;
    private $tax = 1000;

    /**
     * @param $price
     */
    public function __construct($price)
    {
        $this->price = $price;
    }

    public function createBMWCar(): BMWCar
    {
        return new BMWCar($this->price);
    }

    public function createFiatCar(): FiatCar
    {
        return new FiatCar($this->price, $this->tax);
    }
}