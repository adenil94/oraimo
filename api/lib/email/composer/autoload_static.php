<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit322eafb723c79422f3f6033c1d3fb347
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit322eafb723c79422f3f6033c1d3fb347::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit322eafb723c79422f3f6033c1d3fb347::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
