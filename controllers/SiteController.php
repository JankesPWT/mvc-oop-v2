<?php
/**
 * 
 * @author Jankes <jankes@jankes.com.pl>
 * @package app\controllers
 * 
 */

namespace app\controllers;
use app\core\Application;


class SiteController
{
    public function home()
    {
        $params = [
            'name' => "Jankes"
        ];
        return Application::$app->router->renderView('home', $params);
    }

    public function contact()
    {
        return Application::$app->router->renderView('contact');
    }

    public function handleContact()
    {
        return "aktuali--zuje dane";
    }
}