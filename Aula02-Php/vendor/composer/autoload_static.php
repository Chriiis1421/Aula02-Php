<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0849ca1eeaf119ae365be455941b66c8
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0849ca1eeaf119ae365be455941b66c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0849ca1eeaf119ae365be455941b66c8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0849ca1eeaf119ae365be455941b66c8::$classMap;

        }, null, ClassLoader::class);
    }
}
