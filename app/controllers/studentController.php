<?php
    namespace App\Controllers;

    require_once __DIR__ . '/../models/services/coursesServices.php';
    require_once __DIR__ . '/../models/repositories/coursesRepositories.php';

    use App\Models\Repositories\CoursesRepositories;
    use App\Models\Services\CoursesServices;

    class StudentController {
        private CoursesServices $coursesServices;

        public function __construct() {
            $coursesRepo = new CoursesRepositories();
            $this->coursesServices = new CoursesServices($coursesRepo);
        }
        public function index() {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            if (!isset($_SESSION['student'])) {
                header("Location: /login");
                exit();
            }
            $enroledCoursesNbr = $this->coursesServices->enrolledCoursesNumber($_SESSION['student']['id']);
            $enrolledCourses = $this->coursesServices->enrolledCoursesStudy($_SESSION['student']['id']);
            $courses = $this->coursesServices->showCourses();
            include_once __DIR__ . '/../views/student/home.php';
        }

        public function showCourse() {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            $id = $_GET['id'];
            $course = $this->coursesServices->showCourseById($id);
            include_once __DIR__ . '/../views/student/showCourse.php';
        }

        public function enrolledCourse() {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            if (!isset($_SESSION['student'])) {
                header("Location: /login");
                exit();
            }
            $data = json_decode(file_get_contents('php://input'), true);
            $courseId = (int) $data['course_id'];
            $studentId = $_SESSION['student']['id'];

            $success = $this->coursesServices->addNewEnrollement($studentId , $courseId);
            header('Content-Type: application/json');
            echo json_encode(['success' => $success]);
        }
    }