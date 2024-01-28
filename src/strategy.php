<?php

namespace App;

use App\Strategy\CalculadoraDeImpostos;
use App\Strategy\Impostos\Icms;
use App\Strategy\Impostos\Iss;
use App\Strategy\Orcamento;

require_once __DIR__ . '/../vendor/autoload.php';

//-------------------- Strategy ----------------------------

$calculadora = new CalculadoraDeImpostos;

$orcamento = new Orcamento(1000);

echo $calculadora->calcula($orcamento, new Iss) . PHP_EOL;
