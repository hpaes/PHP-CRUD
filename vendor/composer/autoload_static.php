<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4780caf623f6e413a9e8f198f12aa56a
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4780caf623f6e413a9e8f198f12aa56a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4780caf623f6e413a9e8f198f12aa56a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
