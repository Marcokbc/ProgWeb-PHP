<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita03f2a87047eae83f07d71c6f14b4f02
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita03f2a87047eae83f07d71c6f14b4f02::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita03f2a87047eae83f07d71c6f14b4f02::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita03f2a87047eae83f07d71c6f14b4f02::$classMap;

        }, null, ClassLoader::class);
    }
}