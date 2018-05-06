<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b2c0688a68eb4ca82880e0f18fc86d7
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

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b2c0688a68eb4ca82880e0f18fc86d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b2c0688a68eb4ca82880e0f18fc86d7::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit4b2c0688a68eb4ca82880e0f18fc86d7::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
