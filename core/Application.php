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
    public Request $request;
    public function __construct($rootPath)
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run()
    {
        $this->router->resolve();
    }
}