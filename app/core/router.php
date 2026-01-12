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
                        $parts = explode('@', $route['action']);
                        $controllerName = $parts[0];
                        $methodName = $parts[1];

                        $controller = new $controllerName();
                        call_user_func_array([$controller, $methodName], $matches);
                        return;
                    }
                }
            }

            echo "404 - Page not found";
        }
    }   