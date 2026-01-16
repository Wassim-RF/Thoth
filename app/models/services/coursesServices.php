<?php
    namespace App\Models\Services;

    require_once __DIR__ . '/../entities/courses.php';
    require_once __DIR__ . '/../repositories/coursesRepositories.php';
    require_once __DIR__ . '/../entities/enrollement.php';

    use App\Models\Entities\Courses;
    use App\Models\Entities\Enrollement;
    use App\Models\Repositories\CoursesRepositories;

    class CoursesServices {
        private CoursesRepositories $coursesRepositories;

        public function __construct(CoursesRepositories $coursesRepositories) {
            $this->coursesRepositories = $coursesRepositories;
        }

        public function showCourses() {
            return $this->coursesRepositories->showAllCourse();
        }
        public function enrolledCoursesNumber(int $id) {
            return $this->coursesRepositories->enrolledCoursesNumber($id);
        }
        public function showCourseById(int $id) {
            return $this->coursesRepositories->findCourseById($id);
        }
        public function enrolledCoursesStudy(int $id) {
            return $this->coursesRepositories->studentEnrolledCourses($id);
        }
        public function addNewEnrollement(int $student_id , int $course_id) {
            $enrollement = new Enrollement($student_id , $course_id);
            return $this->coursesRepositories->createNewEnrollement($enrollement);
        }
    }