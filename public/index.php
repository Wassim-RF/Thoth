<?php
    require_once '../app/core/router.php';

    use App\Core\Router;

    $router = new Router();

    $router->dispatch();