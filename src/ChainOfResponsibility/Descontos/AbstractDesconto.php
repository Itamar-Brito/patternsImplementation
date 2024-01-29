<?php

namespace App\ChainOfResponsibility\Descontos;

use App\ChainOfResponsibility\Orcamento;

abstract class AbstractDesconto
{
    protected ?AbstractDesconto $proximoDesconto;

    public function __construct(?AbstractDesconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }

    abstract public function calculaDesconto(Orcamento $orcamento) :float ;
}
