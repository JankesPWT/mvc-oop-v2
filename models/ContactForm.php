<?php
namespace app\models;
use app\core\Model;
/**
 * 
 * @author Jacek Jankes Polit <jankes@jankes.com.pl>
 * @copyright (c) 2022
 * @package app\models
 */
class ContactForm extends Model
{
    public string $subject = '';
    public string $email = '';
    public string $body = '';

	function rules(): array {
        return [
            'subject' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED],
            'body' => [self::RULE_REQUIRED]
        ];
	}

    public function labels():array
    {
        return [
            'subject' => 'Wpisz temat',
            'email' => 'Mejl',
            'body' => 'Wiadomość'
        ];
    }

    public function send()
    {
        return true;
    }
}