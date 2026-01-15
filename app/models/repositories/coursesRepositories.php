<?php
    namespace App\Models\Repositories;

    require_once __DIR__ . '/../../core/database.php';
    require_once __DIR__ . '/../entities/student.php';

    use App\Models\Entities\Student;
    use App\Core\DatabaseConnection;
    use PDO;

    class CoursesRepositories {
        private PDO $pdo;

        public function __construct() {
            $this->pdo = DatabaseConnection::getInstance()->getConnection();
        }
        public function showAllCourse() {
            $sql = "SELECT * FROM courses";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function ifIsEnrollmentsInTheCourses(int $id) {
            $sql = "SELECT * FROM enrollments WHERE student_id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function studentEnrolled(int $id) {
            $sql = "SELECT * FROM courses WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }