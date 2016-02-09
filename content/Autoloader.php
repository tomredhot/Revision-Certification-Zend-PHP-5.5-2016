<?php
namespace App;
/**
 * Class Autoloader
 * require '../app/Autoloader.php';
 * \App\autoloader::register();
 */
class Autoloader
{

    /**
     * register Autoloader
     */
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Include the file of class
     * @param $class string class name to load
     */
    static function autoload($class)
    {
        if (strpos($class, __NAMESPACE__ . '\\') === 0) {
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            $class = str_replace('\\', '/', $class);
            require __DIR__ . '/' . $class . '.php';
        }

    }

}


?>