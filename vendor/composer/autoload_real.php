<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit7b766f6987151b43cd8035ebca53f8a9
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit7b766f6987151b43cd8035ebca53f8a9', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit7b766f6987151b43cd8035ebca53f8a9', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInit7b766f6987151b43cd8035ebca53f8a9::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}