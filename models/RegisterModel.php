<?php

namespace app\models;
use app\core\Model;


/**
 * 
 * @author Jankes <jankes@jankes.com.pl>
 * @package app\models
 */
class RegisterModel extends Model
{
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;
    public string $passwordConfirm;

    public function register()
    {
        echo 'nowy juzer';
    }
}