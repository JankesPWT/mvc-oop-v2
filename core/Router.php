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
    public Response $response;
    protected array $routes = [];

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $method = $this->request->getMethod(); //get lub post
        $path = $this->request->getPath(); // /user,  /contact
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback == false) {
            $this->response->statusCode(404);
            return $this->renderView("_404");
        }
        if (is_string($callback)) {
            return $this->renderView($callback);
        }
        if (is_array($callback)) {
            $callback[0] = new $callback[0]();
        }
        return call_user_func($callback);
    }

    public function renderView($view, $params = [])
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderViewOnly($view, $params);
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function renderContent($viewContent)
    {
        $layoutContent = $this->layoutContent();
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }
    public function layoutContent()
    {
        ob_start(); //starts output caching
        include_once Application::$ROOT_DIR."/views/layouts/main.php";
        return ob_get_clean();
    }

    public function renderViewOnly($view, $params)
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
     
        ob_start();
        include_once Application::$ROOT_DIR."/views/$view.php";
        return ob_get_clean();
    }
 }