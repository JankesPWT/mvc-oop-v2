<?php

namespace app\core;


/**
 * Class Controller
 *
 * @author  Jankes <jankes@jankes.com.pl>
 * @package app\core
 */
class Controller
{
    public string $layout = 'main';
    public function setLayout($layout): void
    {
        $this->layout = $layout;
    }
    public function render($view, $params = []): string
    {
        return Application::$app->router->renderView($view, $params);
    }
}