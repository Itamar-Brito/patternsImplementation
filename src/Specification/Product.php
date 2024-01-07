<?php

namespace App\Specification;

class Product
{
    public $name;
    public $price;
    public $size;

    public function __construct($name, $price, $size)
    {
        $this->name = $name;
        $this->price = $price;
        $this->size = $size;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getSize()
    {
        return $this->size;
    }
}