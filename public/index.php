<?php
    require_once '../app/core/router.php';
    require_once '../app/controllers/authController.php';

    use App\Core\Router;
    use App\Controllers\AuthController;

    $router = new Router();

    $router->add('GET', '/', [AuthController::class , 'index']);
    $router->add('GET', '/login', [AuthController::class , 'showLoginPage']);
    $router->add('GET', '/register', [AuthController::class , 'showRegisterPage']);
    $router->add('POST', '/login', [AuthController::class , 'login']);
    $router->add('POST', '/register', [AuthController::class , 'register']);

    $router->dispatch();