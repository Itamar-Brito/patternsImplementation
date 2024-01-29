<?php

namespace App;

use App\ChainOfResponsibility\CalculadoraDeDescontos;
use App\ChainOfResponsibility\Orcamento;

require_once __DIR__ . '/../vendor/autoload.php';


$calculadoraDeDescontos = new CalculadoraDeDescontos();

$orcamento = new Orcamento;
$orcamento->valor = 300;
$orcamento->quantidadeDeItens = 7;

echo $calculadoraDeDescontos->calculaDescontos($orcamento). PHP_EOL;
