<?php


namespace app\core;


/**
 * Class Response
 *
 * @author  Jankes <jankes@jankes.com.pl>
 * @package app\core
 */
class Response
{
    public function statusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect($url)
    {
        header("Location: $url");
    }
}
