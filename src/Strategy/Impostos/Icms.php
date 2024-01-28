<?php

namespace App\Strategy\Impostos;

use App\Strategy\Contracts\Imposto;
use App\Strategy\Orcamento;

class Icms implements Imposto
{
    public function calculaImposto(Orcamento $orcamento) :float
    {
        return $orcamento->valor * 0.1;
    }
}
