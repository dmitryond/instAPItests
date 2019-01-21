<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit478c0ef39ceb76e30e35dd50d105eac7
{
    public static $files = array (
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
        '6b06ce8ccf69c43a60a1e48495a034c9' => __DIR__ . '/..' . '/react/promise-timer/src/functions.php',
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'ebf8799635f67b5d7248946fe2154f4a' => __DIR__ . '/..' . '/ringcentral/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Winbox\\' => 7,
        ),
        'S' => 
        array (
            'Symfony\\Component\\Process\\' => 26,
        ),
        'R' => 
        array (
            'RingCentral\\Psr7\\' => 17,
            'React\\Stream\\' => 13,
            'React\\Socket\\' => 13,
            'React\\Promise\\Timer\\' => 20,
            'React\\Promise\\' => 14,
            'React\\EventLoop\\' => 16,
            'React\\Dns\\' => 10,
            'React\\Cache\\' => 12,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
        ),
        'L' => 
        array (
            'LazyJsonMapper\\' => 15,
        ),
        'I' => 
        array (
            'InstagramAPI\\' => 13,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
            'GetOptionKit\\' => 13,
        ),
        'F' => 
        array (
            'Fbns\\Client\\' => 12,
        ),
        'C' => 
        array (
            'Clue\\React\\Socks\\' => 17,
            'Clue\\React\\HttpProxy\\' => 21,
        ),
        'B' => 
        array (
            'BinSoul\\Net\\Mqtt\\Client\\React\\' => 30,
            'BinSoul\\Net\\Mqtt\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Winbox\\' => 
        array (
            0 => __DIR__ . '/..' . '/winbox/args/src',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'RingCentral\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/ringcentral/psr7/src',
        ),
        'React\\Stream\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/stream/src',
        ),
        'React\\Socket\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/socket/src',
        ),
        'React\\Promise\\Timer\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise-timer/src',
        ),
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
        'React\\EventLoop\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/event-loop/src',
        ),
        'React\\Dns\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/dns/src',
        ),
        'React\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/cache/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'LazyJsonMapper\\' => 
        array (
            0 => __DIR__ . '/..' . '/lazyjsonmapper/lazyjsonmapper/src',
        ),
        'InstagramAPI\\' => 
        array (
            0 => __DIR__ . '/..' . '/mgp25/instagram-php/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'GetOptionKit\\' => 
        array (
            0 => __DIR__ . '/..' . '/corneltek/getoptionkit/src',
        ),
        'Fbns\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/valga/fbns-react/src',
        ),
        'Clue\\React\\Socks\\' => 
        array (
            0 => __DIR__ . '/..' . '/clue/socks-react/src',
        ),
        'Clue\\React\\HttpProxy\\' => 
        array (
            0 => __DIR__ . '/..' . '/clue/http-proxy-react/src',
        ),
        'BinSoul\\Net\\Mqtt\\Client\\React\\' => 
        array (
            0 => __DIR__ . '/..' . '/binsoul/net-mqtt-client-react/src',
        ),
        'BinSoul\\Net\\Mqtt\\' => 
        array (
            0 => __DIR__ . '/..' . '/binsoul/net-mqtt/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'E' => 
        array (
            'Evenement' => 
            array (
                0 => __DIR__ . '/..' . '/evenement/evenement/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit478c0ef39ceb76e30e35dd50d105eac7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit478c0ef39ceb76e30e35dd50d105eac7::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit478c0ef39ceb76e30e35dd50d105eac7::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
