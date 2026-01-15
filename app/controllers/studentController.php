<?php
    namespace App\Controllers;

    class StudentController {
        public function index() {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            if (!isset($_SESSION['student'])) {
                header("Location: /login");
                exit();
            }
            include_once __DIR__ . '/../views/student/home.php';
        }
    }