<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit77a5281b8090362b2e5218c07c4811ec
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tyastomo\\Response\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tyastomo\\Response\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit77a5281b8090362b2e5218c07c4811ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit77a5281b8090362b2e5218c07c4811ec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit77a5281b8090362b2e5218c07c4811ec::$classMap;

        }, null, ClassLoader::class);
    }
}
