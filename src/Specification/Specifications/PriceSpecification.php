<?php

namespace App\Specification\Specifications;

use App\Specification\Contracts\Specification;

class PriceSpecification implements Specification
{
    private $maxPrice;

    public function __construct($maxPrice)
    {
        $this->maxPrice = $maxPrice;
    }

    public function isSatisfiedBy($item)
    {
        return $item->price <= $this->maxPrice;
    }
}
