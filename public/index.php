<?php
    require_once '../app/core/router.php';
    require_once '../app/controllers/authController.php';

    use App\Core\Router;
    use App\Controllers\AuthController;

    $router = new Router();
    $auth = new AuthController();

    $router->add('GET', '/', [AuthController::class , 'index']);
    $router->add('GET', '/login', [AuthController::class , 'showLoginPage']);

    $router->dispatch();