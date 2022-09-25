<?php

namespace app\core;


/**
 * Class Request
 *
 * @author  Jankes <jankes@jankes.com.pl>
 * @package jankes/mvc-oop-v2
 */

class Request
{
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? "/";
        $position = strpos($path, '?'); //pozycja znaku zapytania 
        if ($position !== false) {
            $path = substr($path, 0, $position); 
        }
        echo $path;

       
    }

    public function getMethod()
    {

    }
}