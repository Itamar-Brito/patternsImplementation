<?php

namespace App\ChainOfResponsibility\Descontos;

use App\ChainOfResponsibility\Orcamento;

class DescontoMaisDe500reais extends AbstractDesconto
{

    public function calculaDesconto(Orcamento $orcamento): float
    {
        if($orcamento->valor > 500 ){
            return $orcamento->valor * 0.1;
        }


        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}
