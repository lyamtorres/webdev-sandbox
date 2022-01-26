<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f9dbe61b21662c24f690465bd0f390c
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'U' => 
        array (
            'Util\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'E' => 
        array (
            'Entity\\' => 7,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
            'Configuration\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Util\\' => 
        array (
            0 => __DIR__ . '/../..' . '/util',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Models',
        ),
        'Entity\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Entity',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Controllers',
        ),
        'Configuration\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f9dbe61b21662c24f690465bd0f390c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f9dbe61b21662c24f690465bd0f390c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3f9dbe61b21662c24f690465bd0f390c::$classMap;

        }, null, ClassLoader::class);
    }
}