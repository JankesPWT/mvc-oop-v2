<?php
/** 
 * User: Jankes
 */

require_once

$app = new Application();

$app->router->get('/', function()
{
    return "hello world";
});

$app->run();