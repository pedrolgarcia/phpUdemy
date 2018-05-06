<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit24334b233ca204403a39a08dcedc5f3c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit24334b233ca204403a39a08dcedc5f3c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit24334b233ca204403a39a08dcedc5f3c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}