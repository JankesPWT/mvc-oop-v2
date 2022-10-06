<?php
/** Jankes */

namespace app\core;

use PDO;

/**
 * 
 * @author Jankes <jankes@jankes.com.pl>
 * @package app\core
 */
class Database
{
    public PDO $pdo;
    
	/**
	 */
	function __construct(array $config)
    {
        $dsn = $config['dsn'] ?? '';
        $user = $config['user'] ?? '';
        $password = $config['password'] ?? '';

        $this->pdo = new PDO($dsn, $user, $password);
        # włącza pokazywanie błędów
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
}