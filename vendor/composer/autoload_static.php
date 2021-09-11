<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcedd95c207bcf773fd15baf87b174266
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CPF\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CPF\\' => 
        array (
            0 => __DIR__ . '/../..' . '/_classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcedd95c207bcf773fd15baf87b174266::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcedd95c207bcf773fd15baf87b174266::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcedd95c207bcf773fd15baf87b174266::$classMap;

        }, null, ClassLoader::class);
    }
}