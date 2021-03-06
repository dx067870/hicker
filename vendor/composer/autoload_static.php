<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit12ea81db26730f16a636806284cc79b0
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hiker\\' => 6,
            'Hiker/Pool\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hiker\\' => 
        array (
            0 => __DIR__ . '/../..' . '/hiker/src',
        ),
        'Hiker/Pool\\' => 
        array (
            0 => __DIR__ . '/../..' . '/hiker/pool',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit12ea81db26730f16a636806284cc79b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit12ea81db26730f16a636806284cc79b0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit12ea81db26730f16a636806284cc79b0::$classMap;

        }, null, ClassLoader::class);
    }
}
