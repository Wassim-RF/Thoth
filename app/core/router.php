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
                if ($route['method'] === $requestMethod && $route['uri'] === $requestUri) {
                    if (is_callable($route['action'])) {
                        call_user_func($route['action']);
                        return;
                    } elseif (is_array($route['action'])) {
                        [$contollerClass , $methode] = $route['action'];
                        if (class_exists($contollerClass)) {
                            $contoller = new $contollerClass();
                            if (method_exists($contoller , $methode)) {
                                $contoller->$methode();
                                return;
                            }
                        }
                    }
                }
            }
            include_once __DIR__ . '/../views/Error/404.php';
        }
    }