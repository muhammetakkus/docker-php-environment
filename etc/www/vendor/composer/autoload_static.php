<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite198662a391c2082bbf3b4621de04807
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite198662a391c2082bbf3b4621de04807::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite198662a391c2082bbf3b4621de04807::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
