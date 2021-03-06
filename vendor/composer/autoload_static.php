<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite3357f44e383ab6088d44d1803ca2901
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'lib\\' => 4,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'lib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite3357f44e383ab6088d44d1803ca2901::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite3357f44e383ab6088d44d1803ca2901::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite3357f44e383ab6088d44d1803ca2901::$classMap;

        }, null, ClassLoader::class);
    }
}
