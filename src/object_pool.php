<?php

namespace App;

use App\ObjectPool\MySqlConnectionPool;
use App\ObjectPool\ObjectPool;

require_once __DIR__ . '/../vendor/autoload.php';

    $objectPool = new ObjectPool();

    // Obter objetos do pool
    $obj1 = $objectPool->getObject();
    $obj2 = $objectPool->getObject();

    // Usar os objetos
    echo "Object 1: " . spl_object_id($obj1) . PHP_EOL;
    echo "Object 2: " . spl_object_id($obj2) . PHP_EOL;

    // Liberar os objetos de volta para o pool
    $objectPool->releaseObject($obj1);
    $objectPool->releaseObject($obj2);

    // Obter outro objeto do pool (reutilizando objeto liberado)
    $obj3 = $objectPool->getObject();
    echo "Object 3: " . spl_object_id($obj3) . PHP_EOL;


//------------------------------------Exemplo conexão ------------------------------------------

// $maxPoolSize = 5;
// $host = "localhost";
// $username = "seu_usuario";
// $password = "sua_senha";
// $database = "seu_banco_de_dados";


// $connectionPool = new MySqlConnectionPool($maxPoolSize, $host, $username, $password, $database);

// // Obter uma conexão do pool
// $connection1 = $connectionPool->getConnection();

// // Use a conexão para executar consultas, etc.

// // Liberar a conexão de volta para o pool
// $connectionPool->releaseConnection($connection1);

// // Obter outra conexão (reutilizando a conexão liberada)
// $connection2 = $connectionPool->getConnection();


// // Liberar a segunda conexão de volta para o pool
// $connectionPool->releaseConnection($connection2);
