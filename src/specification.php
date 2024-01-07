<?php

namespace App;

use App\Specification\AndSpecification;
use App\Specification\Product;
use App\Specification\Specifications\PriceSpecification;
use App\Specification\Specifications\SizeSpecification;

require_once __DIR__ . '/../vendor/autoload.php';

//-------------------- SPECIFICATION ----------------------------

    $product = new Product('Laptop', 800, 15);

    $spec = new AndSpecification(
        new PriceSpecification(900),
        new SizeSpecification(10)
    );

    if ($spec->isSatisfiedBy($product)) {
        echo "Produto: $product->name, atende aos critérios.".PHP_EOL ;
    } else {
        echo "Produto: $product->name não atende aos critérios.".PHP_EOL ;
    }

