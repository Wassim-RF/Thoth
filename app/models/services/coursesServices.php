<?php
    namespace App\Models\Services;

    require_once __DIR__ . '/../entities/courses.php';
    require_once __DIR__ . '/../repositories/coursesRepositories.php';

    use App\Models\Entities\Courses;
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
    }