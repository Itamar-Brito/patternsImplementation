<?php

namespace App\Strategy;

class Orcamento
{
    public float $valor;

    public function __construct($valor)
    {
        $this->valor = $valor;
    }
}
