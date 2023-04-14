<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit539658626e887fd4a86431a6cd90b5f6
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit539658626e887fd4a86431a6cd90b5f6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit539658626e887fd4a86431a6cd90b5f6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit539658626e887fd4a86431a6cd90b5f6::$classMap;

        }, null, ClassLoader::class);
    }
}
