<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita32584e568f6a38c583afb62d2d2b9fc
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita32584e568f6a38c583afb62d2d2b9fc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita32584e568f6a38c583afb62d2d2b9fc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
