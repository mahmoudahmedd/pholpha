<?php

include __DIR__ . "/../bootstrap/autoload.php";

use pholpha\session\session;
use pholpha\cookie\cookie;


class Application 
{
    /**
     * Application constructor
     */
    private function __construct() {}

    /**
     * Run the application
     *
     * @return void
     */
    public static function run() 
    {
        /**
         * Define root path
         */
        define('ROOT', realpath(__DIR__ . "/.."));

        /**
         * Define Directory separator
         */
        define('DS', DIRECTORY_SEPARATOR); 

        // Session start
        Session::start();
    }
}