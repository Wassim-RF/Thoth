<?php
    namespace App\Core;

    class Router {
        private $routes = [];
        public function add($method, $uri, $action) {
            $this->routes[] = [
                'method' => strtoupper($method),
                'uri'    => $uri,
                'action' => $action
            ];
        }
        public function dispatch() {
    $requestMethod = $_SERVER['REQUEST_METHOD'];
    $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    foreach ($this->routes as $route) {
        if ($route['method'] === $requestMethod) {

            $pattern = preg_replace('#\{[a-zA-Z_][a-zA-Z0-9_]*\}#', '([a-zA-Z0-9_-]+)', $route['uri']);
            $pattern = "#^" . $pattern . "$#";

            if (preg_match($pattern, $requestUri, $matches)) {
                array_shift($matches);

                [$controllerName, $methodName] = explode('@', $route['action']);
                $fullControllerName = "App\\Controllers\\" . $controllerName;
                $controllerFile = __DIR__ . "/../controllers/" . $controllerName . ".php";
                if (!file_exists($controllerFile)) {
                    die("Controller file not found: $controllerFile");
                }
                require_once $controllerFile;
                if (!class_exists($fullControllerName)) {
                    die("Controller class not found: $fullControllerName");
                }
                $controller = new $fullControllerName();
                if (!method_exists($controller, $methodName)) {
                    die("Method $methodName not found in $fullControllerName");
                }
                call_user_func_array([$controller, $methodName], $matches);
                return;
            }
        }
    }

    echo "404 - Page not found";
}

    }   