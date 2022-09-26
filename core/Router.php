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
        $method = $this->request->getMethod(); //get lub post
        $path = $this->request->getPath(); // /user,  /contact
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback == false) {
            return "Not found";
        }
        if (is_string($callback)) {
            return $this->renderView($callback);
        }
        return call_user_func($callback);
    }

    public function renderView($view)
    {
        $layoutContent = $this->layoutContent();
        
        $viewContent = $this->renderViewOnly($view);
     
        echo str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function layoutContent()
    {
        ob_start(); //starts output caching 
        include_once Application::$ROOT_DIR."/views/layouts/main.php";
        return ob_get_clean(); // w tutorialu jest ob_get_clean() ale nie działa
    }

    public function renderViewOnly($view)
    {
        ob_start();
        include_once Application::$ROOT_DIR."/views/$view.php";
        return ob_get_clean(); // w tutorialu jest ob_get_clean() ale nie działa
    }
 }