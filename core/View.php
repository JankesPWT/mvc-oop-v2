<?php
namespace app\core;

/**
 * Class View
 * 
 * @author Jacek Jankes Polit
 * @copyright (c) 2022
 * @package app\core
 */
class View 
{
    public string $title = '';

    public function renderView($view, $params = [])
    {
        $viewContent = $this->renderViewOnly($view, $params);
        $layoutContent = $this->layoutContent();
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function renderContent($viewContent)
    {
        $layoutContent = $this->layoutContent();
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function layoutContent()
    {
        $layoutName = Application::$app->layout;
        if (Application::$app->controller) {
            $layoutName = Application::$app->controller->layout;
        }

        ob_start(); //starts output caching
        include_once Application::$ROOT_DIR . "/views/layouts/$layoutName.php";
        return ob_get_clean();
    }

    public function renderViewOnly($view, $params)
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include_once Application::$ROOT_DIR . "/views/$view.php";
        return ob_get_clean();
    }
}