<?php

namespace App\ChainOfResponsibility;

use App\ChainOfResponsibility\Descontos\DescontoMaisDe500reais;
use App\ChainOfResponsibility\Descontos\DescontoMaisDe5Itens;
use App\ChainOfResponsibility\Descontos\SemDesconto;

class CalculadoraDeDescontos
{

    public function calculaDescontos(Orcamento $orcamento)
    {
        $cadeiaDeDescontos = new DescontoMaisDe500reais(
            new DescontoMaisDe5Itens(new SemDesconto)
        );
    
        return $cadeiaDeDescontos->calculaDesconto($orcamento);  
    }
}
