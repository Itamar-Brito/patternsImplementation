<?php

namespace App\Specification\Specifications;

use App\Specification\Contracts\Specification;

class SizeSpecification implements Specification

{
    private $minSize;

    public function __construct($minSize)
    {
        $this->minSize = $minSize;
    }

    public function isSatisfiedBy($item)
    {
        return $item->size >= $this->minSize;
    }
}
