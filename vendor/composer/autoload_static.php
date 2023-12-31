<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3233bfcfb334fdf71482be30d8cb7f22
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
            'ad\\' => 3,
        ),
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'ad\\' => 
        array (
            0 => __DIR__ . '/..' . '/ad/core',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3233bfcfb334fdf71482be30d8cb7f22::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3233bfcfb334fdf71482be30d8cb7f22::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3233bfcfb334fdf71482be30d8cb7f22::$classMap;

        }, null, ClassLoader::class);
    }
}
