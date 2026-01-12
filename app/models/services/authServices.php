<?php
    namespace App\Models\Services;

    require_once __DIR__ . '/../repositories/studentRepositories.php';

    use App\Models\Repositories\StudentRepositories;

    class AuthServices {
        private StudentRepositories $studentRepositories;

        public function __construct(StudentRepositories $studentRepositories) {
            $this->studentRepositories = $studentRepositories;
        }
        
        public function register() {}
    }