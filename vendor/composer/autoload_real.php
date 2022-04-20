<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit40e33c4930e4c2eca6c802c45d237a10
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

        spl_autoload_register(array('ComposerAutoloaderInit40e33c4930e4c2eca6c802c45d237a10', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit40e33c4930e4c2eca6c802c45d237a10', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit40e33c4930e4c2eca6c802c45d237a10::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
