<?php

/** User: Jankes */

use app\controllers\AuthController;
use app\controllers\SiteController;
use app\core\Application;

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
    'userClass' => \app\models\User::class,
    'db' => [
        'dsn'      => $_ENV['DB_DSN'],
        'user'     => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [new SiteController(), 'contact']);
$app->router->post('/contact', [new SiteController(), 'contact']); //

$app->router->get('/about', [new SiteController(), 'home']); //

$app->router->get('/login', [new AuthController(), 'login']); //
$app->router->post('/login', [new AuthController(), 'login']); //

$app->router->get('/login/{id:\d+}/{username}', [new AuthController(), 'login']);


$app->router->get('/register', [new AuthController(), 'register']); //
$app->router->post('/register', [new AuthController(), 'register']); //

$app->router->get('/logout', [new AuthController(), 'logout']);
$app->router->get('/profile', [new AuthController(), 'profile']);

$app->router->get('/profile/{id:\d+}/{username}', [new AuthController(), 'profile']);

$app->run();
