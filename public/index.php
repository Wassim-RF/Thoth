<?php
    require_once '../app/core/router.php';
    require_once '../app/controllers/authController.php';

    use App\Core\Router;
    use App\Controllers\AuthController;

    $router = new Router();

    $router->add('GET' , '/' , 'AuthController@index');
    $router->add('GET' , '/login' , 'AuthController@showLoginPage');

    $router->dispatch();