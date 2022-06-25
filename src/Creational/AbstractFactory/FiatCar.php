<?php

namespace Mo7am\Patterns\Creational\AbstractFactory;

class FiatCar implements CarInterface
{
    private $price;
    private $tax;

    /**
     * @param $price
     * @param $tax
     */
    public function __construct($price, $tax)
    {
        $this->price = $price;
        $this->tax = $tax;
    }


    public function calculatePrice()
    {
        return ($this->price + $this->tax) * 3;
    }
}