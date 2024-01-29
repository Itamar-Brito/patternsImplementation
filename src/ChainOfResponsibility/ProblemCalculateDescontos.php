<?php

namespace App\ChainOfResponsibility;

class ProblemCalculateDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {

        if ($orcamento->quantidadeDeItens > 5) {
            return $orcamento->valor * 0.1;
        }

        if ($orcamento->valor  > 500) {
            return $orcamento->valor * 0.05;
        }

    }
}
