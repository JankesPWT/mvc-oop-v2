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

    public function handleContact()
    {
        return "aktuali--zuje dane";
    }
}