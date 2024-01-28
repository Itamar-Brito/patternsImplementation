<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd751713988987e9331980363e24189ce
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'App\\ObjectPool\\MySqlConnectionPool' => __DIR__ . '/../..' . '/src/ObjectPool/MySqlConnectionPool.php',
        'App\\ObjectPool\\ObjectPool' => __DIR__ . '/../..' . '/src/ObjectPool/ObjectPool.php',
        'App\\Specification\\AndSpecification' => __DIR__ . '/../..' . '/src/Specification/AndSpecification.php',
        'App\\Specification\\Contracts\\Specification' => __DIR__ . '/../..' . '/src/Specification/Contracts/Specification.php',
        'App\\Specification\\Product' => __DIR__ . '/../..' . '/src/Specification/Product.php',
        'App\\Specification\\Specifications\\PriceSpecification' => __DIR__ . '/../..' . '/src/Specification/Specifications/PriceSpecification.php',
        'App\\Specification\\Specifications\\SizeSpecification' => __DIR__ . '/../..' . '/src/Specification/Specifications/SizeSpecification.php',
        'App\\Strategy\\CalculadoraDeImpostos' => __DIR__ . '/../..' . '/src/Strategy/CalculadoraDeImpostos.php',
        'App\\Strategy\\Contracts\\Imposto' => __DIR__ . '/../..' . '/src/Strategy/Contracts/Imposto.php',
        'App\\Strategy\\Impostos\\Icms' => __DIR__ . '/../..' . '/src/Strategy/Impostos/Icms.php',
        'App\\Strategy\\Impostos\\Iss' => __DIR__ . '/../..' . '/src/Strategy/Impostos/Iss.php',
        'App\\Strategy\\Orcamento' => __DIR__ . '/../..' . '/src/Strategy/Orcamento.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd751713988987e9331980363e24189ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd751713988987e9331980363e24189ce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd751713988987e9331980363e24189ce::$classMap;

        }, null, ClassLoader::class);
    }
}
