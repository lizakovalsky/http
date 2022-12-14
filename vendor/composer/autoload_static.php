<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3e2dfd2284c684a9259da829a29b86f9
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Justduck\\AuthApp\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Justduck\\AuthApp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3e2dfd2284c684a9259da829a29b86f9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3e2dfd2284c684a9259da829a29b86f9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3e2dfd2284c684a9259da829a29b86f9::$classMap;

        }, null, ClassLoader::class);
    }
}
