<?php

namespace app\core;


/**
 *
 * @author Jankes <jankes@jankes.com.pl>
 * @package app\core
 */
abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}
