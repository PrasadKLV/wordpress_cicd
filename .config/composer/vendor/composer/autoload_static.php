<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit30b9bf79d9a188106912f4924c87e6e9
{
    public static $files = array (
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
        '6a73965866b7cde2061e0db55cea3349' => __DIR__ . '/..' . '/banago/phploy/src/utils.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
        'S' => 
        array (
            'Seld\\CliPrompt\\' => 15,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'L' => 
        array (
            'League\\Flysystem\\Sftp\\' => 22,
            'League\\Flysystem\\' => 17,
            'League\\CLImate\\' => 15,
        ),
        'B' => 
        array (
            'Banago\\PHPloy\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'Seld\\CliPrompt\\' => 
        array (
            0 => __DIR__ . '/..' . '/seld/cli-prompt/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'League\\Flysystem\\Sftp\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/flysystem-sftp/src',
        ),
        'League\\Flysystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/flysystem/src',
        ),
        'League\\CLImate\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/climate/src',
        ),
        'Banago\\PHPloy\\' => 
        array (
            0 => __DIR__ . '/..' . '/banago/phploy/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit30b9bf79d9a188106912f4924c87e6e9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit30b9bf79d9a188106912f4924c87e6e9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
