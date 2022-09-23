<?php
/** */
namespace app\core;

/**
 * Class Application
 * 
 * @author Jankes <jankes@jankes.com.pl>
 * @package app\core
 */

class Application
{
    public Router $router;

    public function __conctruct() {
        $this->router = new Router();
    }

    public function run()
    {
        $this->router->resolve();
    }
}