<?php
/**
 * Class Application
 * 
 * @author Jankes <jankes@jankes.com.pl>
 * @package ${NAMESPACE}
 */

class Application
{
    public function Router $router;

    public function __conctruct() {
        $this->router = new Router();
    }
}