<?php
    namespace App\Controllers;

    require_once __DIR__ . '/../models/services/authServices.php';
    require_once __DIR__ . '/../models/repositories/studentRepositories.php';

    use App\Models\Services\AuthServices;

    class AuthController {
        private AuthServices $authServices;
        public function index() {
            header("Location: /login");
            exit();
        }

        public function showLoginPage() {
            require_once __DIR__ . '/../views/auth/login.php';
        }

        public function showRegisterPage() {
            require_once __DIR__ . '/../views/auth/register.php';
        }

        public function login() {
            $email_input = $_POST['email_login--input'];
            $password_input = $_POST['password_login--input'];
            $this->authServices->login($email_input , $password_input);
        }
    }