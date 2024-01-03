<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitce898799e0cc0dc453a1eff23f3abfb7
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DB\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DB\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database',
        ),
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitce898799e0cc0dc453a1eff23f3abfb7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitce898799e0cc0dc453a1eff23f3abfb7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitce898799e0cc0dc453a1eff23f3abfb7::$classMap;

        }, null, ClassLoader::class);
    }
}
