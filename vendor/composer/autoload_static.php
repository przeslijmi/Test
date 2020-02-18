<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit988ca71f3735a32761081b8f61e9fd11
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Przeslijmi\\XlsxPeasant\\' => 23,
            'Przeslijmi\\Sivalidator\\' => 23,
            'Przeslijmi\\Sexceptions\\' => 23,
        ),
        'F' => 
        array (
            'Fleshgrinder\\PhpUuid\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Przeslijmi\\XlsxPeasant\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Przeslijmi\\Sivalidator\\' => 
        array (
            0 => __DIR__ . '/..' . '/przeslijmi/sivalidator/src',
            1 => __DIR__ . '/..' . '/przeslijmi/sivalidator/src',
        ),
        'Przeslijmi\\Sexceptions\\' => 
        array (
            0 => __DIR__ . '/..' . '/przeslijmi/sexceptions/src',
            1 => __DIR__ . '/..' . '/przeslijmi/sexceptions/src',
            2 => __DIR__ . '/..' . '/przeslijmi/sexceptions/src',
        ),
        'Fleshgrinder\\PhpUuid\\' => 
        array (
            0 => __DIR__ . '/..' . '/fleshgrinder/php-uuid/src',
        ),
    );

    public static $classMap = array (
        'UUID' => __DIR__ . '/..' . '/fleshgrinder/uuid/src/UUID.php',
        'UUIDParseException' => __DIR__ . '/..' . '/fleshgrinder/uuid/src/UUIDParseException.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit988ca71f3735a32761081b8f61e9fd11::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit988ca71f3735a32761081b8f61e9fd11::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit988ca71f3735a32761081b8f61e9fd11::$classMap;

        }, null, ClassLoader::class);
    }
}