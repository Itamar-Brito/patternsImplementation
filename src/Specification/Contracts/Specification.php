<?php

namespace App\Specification\Contracts;

interface Specification
{
    public function isSatisfiedBy($item);
}
