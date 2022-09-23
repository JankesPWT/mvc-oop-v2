<?php
/** Jankes */

namespace app\core;

/**
 * Class Router
 * 
 * @author Jankes <jankes@jankes.com.pl>
 * @package app\core
 *
 */

 class Router
 {
    protected array $routes = [];

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        
    }
 }