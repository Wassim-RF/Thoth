<?php
    namespace App\Models\Repositories;

    require_once __DIR__ . '/../../core/database.php';
    require_once __DIR__ . '/../entities/student.php';

    use App\Models\Entities\Student;
    use App\Core\DatabaseConnection;
    use PDO;

    class StudentRepositories {
        private PDO $pdo;

        public function __construct() {
            $this->pdo = DatabaseConnection::getInstance()->getConnection();
        }

        public function createStudent(Student $student) {
            $sql = "INSERT INTO students (name , email , password) VALUES (:name , :email , :password)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                'name' => $student->getName(),
                'email' => $student->getEmail(),
                'password' => $student->getPassword()
            ]);
            $id = (int) $this->pdo->lastInsertId();
            $student->setId($id);

            return $student;
        }
        public function findStudentByEmail(string $email) {
            $sql = "SELECT * FROM students WHERE email = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$email]);
            
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }