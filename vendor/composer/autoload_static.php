<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf0f7eed3059f758ddd294be0c036f99f
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf0f7eed3059f758ddd294be0c036f99f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf0f7eed3059f758ddd294be0c036f99f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
