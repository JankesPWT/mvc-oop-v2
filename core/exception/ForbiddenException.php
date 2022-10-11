<?php

namespace app\core\exception;


/**
 * @author  Jankes <jankes@jankes.com.pl>
 * @package app\core\exception
 */
class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = 403;
}
