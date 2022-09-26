<?php
/** Jankes */





namespace app\core;

/**
 * Class Router
 * 
 * @author Jankes <jankes@jankes.com.pl>
 * @package jankes/mvc-oop-v2
 */
class Router
 {
    public Request $request;
    protected array $routes = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath(); // /user,  /contact
        $method = $this->request->getMethod(); //get lub post
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false) {
            echo "Not found";
            exit;
        }
  
        echo call_user_func($callback);
    }
 }