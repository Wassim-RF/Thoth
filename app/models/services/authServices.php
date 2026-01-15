<?php
    namespace App\Models\Services;

    require_once __DIR__ . '/../entities/student.php';
    require_once __DIR__ . '/../repositories/studentRepositories.php';

    use App\Models\Entities\Student;
    use App\Models\Repositories\StudentRepositories;

    class AuthServices {
        private StudentRepositories $studentRepositories;

        public function __construct(StudentRepositories $studentRepositories) {
            $this->studentRepositories = $studentRepositories;
        }

        public function login(string $email , string $password) {
            $student = $this->studentRepositories->findStudentByEmail($email);
            if (!$student) return null;

            if ($student) {
                if(password_verify($password , $student['password'])) {
                    if (session_status() === PHP_SESSION_NONE) {
                        session_start();
                    }
                    $_SESSION['student'] = [
                        'id' => $student['id'],
                        'name' => $student['name'],
                        'email' => $student['email']
                    ];
                }
            }
        }

        public function register(string $name , string $email , string $password) {
            $student = $this->studentRepositories->findStudentByEmail($email);
            if ($student) return null;

            $student = new Student($name , $email , $password);

            $this->studentRepositories->createStudent($student);
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION['student'] = [
                'id' => $this->studentRepositories->lastInseredId(),
                'name' => $name,
                'email' => $email
            ];
        }
        
        public static function ifIsLogin() {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            if (!isset($_SESSION['student'])) {
                header("Location: /login");
                exit();
            }
        }
    }