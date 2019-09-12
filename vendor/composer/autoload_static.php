<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit21d13e2ffbd217f8434774078880795e
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'demo\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'demo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/demo',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit21d13e2ffbd217f8434774078880795e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit21d13e2ffbd217f8434774078880795e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
