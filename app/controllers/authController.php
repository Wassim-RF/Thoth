<?php
    namespace App\Controllers;

    require_once __DIR__ . '/../models/services/authServices.php';

    use App\Models\Services\AuthServices;

    class AuthController {
        public function index() {
            header("Location: /login");
            exit();
        }

        public function showLoginPage() {
            require_once __DIR__ . '/../views/auth/login.php';
        }

        public function login() {}
    }