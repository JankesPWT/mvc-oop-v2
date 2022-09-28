<?php
/**
 * 
 * @author Jankes <jankes@jankes.com.pl>
 * @package app\controllers
 * 
 */

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => "Jankes"
        ];
        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact(Request $request)
    {
        $body = Application::$app->request->getBody();
        echo '<pre>';
        var_dump($body);
        echo '</pre>';
        return "aktuali--zuje dane";
    }
}