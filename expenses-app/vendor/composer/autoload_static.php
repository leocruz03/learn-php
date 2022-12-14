<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d3b09a98015d5f68cc7b35e0ecd4046
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Usuario\\ExpensesApp\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Usuario\\ExpensesApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7d3b09a98015d5f68cc7b35e0ecd4046::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7d3b09a98015d5f68cc7b35e0ecd4046::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7d3b09a98015d5f68cc7b35e0ecd4046::$classMap;

        }, null, ClassLoader::class);
    }
}
