<?php
    namespace App\Models\Repositories;

    require_once __DIR__ . '/../../core/database.php';
    require_once __DIR__ . '/../entities/student.php';
    require_once __DIR__ . '/../entities/enrollement.php';

    use App\Models\Entities\Student;
    use App\Models\Entities\Enrollement;
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

        public function findCourseById(int $id) {
            $sql = "SELECT * FROM courses WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function ifIsEnrollmentsInTheCourses(int $id) {
            $sql = "SELECT * FROM enrollments WHERE student_id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function studentEnrolledCourses(int $id) {
            $sql = "SELECT course_id, enrollment_pourcentage FROM enrollments WHERE student_id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $result = [];
            foreach ($rows as $row) {
                $result[$row['course_id']] = $row['enrollment_pourcentage'];
            }
            return $result;
        }


        public function enrolledCoursesNumber(int $id) {
            $sql = "SELECT COUNT(*) FROM enrollments WHERE student_id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
            return $stmt->fetchColumn();
        }
        public function createNewEnrollement(Enrollement $enrollement) {
            $sql = "INSERT INTO enrollments (student_id, course_id) VALUES (:student_id, :course_id)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                'student_id' => $enrollement->getStudentId(),
                'course_id' => $enrollement->getCourseId()
            ]);
            $id = (int) $this->pdo->lastInsertId();
            $enrollement->setId($id);
            return $enrollement;
        }
    }