<?php
namespace app\core;
use app\core\db\DbModel;

/**
 * Summary of UserModel
 * @author Jacek Jankes Polit <jankes@jankes.com.pl>
 * @copyright (c) 2022
 * @package app\core
 */
abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}
