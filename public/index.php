<?php
    require_once '../app/core/router.php';
    require_once '../app/controllers/authController.php';
    require_once '../app/controllers/studentController.php';

    use App\Core\Router;
    use App\Controllers\AuthController;
    use App\Controllers\StudentController;

    $router = new Router();

    $router->add('GET', '/', [AuthController::class , 'index']);
    $router->add('GET', '/login', [AuthController::class , 'showLoginPage']);
    $router->add('GET', '/register', [AuthController::class , 'showRegisterPage']);
    $router->add('POST', '/login', [AuthController::class , 'login']);
    $router->add('POST', '/register', [AuthController::class , 'register']);
    $router->add('GET', '/home', [StudentController::class , 'index']);
    $router->add('GET', '/course', [StudentController::class , 'showCourse']);
    $router->add('POST', '/enroll-course', [StudentController::class , 'enrolledCourse']);
    $router->add('POST', '/logout', [AuthController::class , 'logout']);

    $router->dispatch();