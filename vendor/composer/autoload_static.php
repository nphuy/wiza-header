<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1c2cb2637e5b170c27a3d0767bf4be2
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Halink\\WizaHeader\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Halink\\WizaHeader\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1c2cb2637e5b170c27a3d0767bf4be2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1c2cb2637e5b170c27a3d0767bf4be2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd1c2cb2637e5b170c27a3d0767bf4be2::$classMap;

        }, null, ClassLoader::class);
    }
}
