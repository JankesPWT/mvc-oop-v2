<?php

namespace app\core\middlewares;


/**
 * @author  Jankes <jankes@jankes.com.pl>
 * @package app\core\middlewares
 */

abstract class BaseMiddleware
{
    abstract public function execute();
}
