<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit5e71b7c9b0bb1ab4d7bbf6b0afadf04a
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit5e71b7c9b0bb1ab4d7bbf6b0afadf04a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit5e71b7c9b0bb1ab4d7bbf6b0afadf04a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit5e71b7c9b0bb1ab4d7bbf6b0afadf04a::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit5e71b7c9b0bb1ab4d7bbf6b0afadf04a::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire5e71b7c9b0bb1ab4d7bbf6b0afadf04a($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire5e71b7c9b0bb1ab4d7bbf6b0afadf04a($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
