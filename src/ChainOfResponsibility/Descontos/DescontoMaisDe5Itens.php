<?php

namespace App\ChainOfResponsibility\Descontos;

use App\ChainOfResponsibility\Orcamento;

class DescontoMaisDe5Itens extends AbstractDesconto
{

    public function calculaDesconto(Orcamento $orcamento): float
    {
        if($orcamento->quantidadeDeItens > 5 ){
            return $orcamento->valor * 0.1;
        }


        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}
