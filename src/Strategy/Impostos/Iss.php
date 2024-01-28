<?php

namespace App\Strategy\Impostos;

use App\Strategy\Contracts\Imposto;
use App\Strategy\Orcamento;

class Iss implements Imposto
{
    public function calculaImposto(Orcamento $orcamento) :float
    {
        return $orcamento->valor * 0.06;
    }
}
