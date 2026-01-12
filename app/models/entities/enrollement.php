<?php
    namespace App\Models\Entities;

    use DateTime;

    class Enrollement {
        private ?int $id = null;
        private int $student_id;
        private int $course_id;
        private DateTime $enrollement_date;
        
        public function __construct(string $student_id, string $course_id, DateTime $enrollement_date) {
            $this->setStudentId($student_id);
            $this->setCourseId($course_id);
            $this->setEnrollementDate($enrollement_date);
        }
        public function getId() {
            return $this->id;
        }
        public function setId(int $id) {
            $this->id = $id;
        }
        public function getStudentId() {
            return $this->student_id;
        }
        public function setStudentId(int $student_id) {
            $this->student_id = $student_id;
        }
        public function getCourseId() {
            return $this->course_id;
        }
        public function setCourseId(int $course_id) {
            $this->course_id = $course_id;
        }
        public function getEnrollementDate() {
            return $this->enrollement_date;
        }
        public function setEnrollementDate(DateTime $enrollement_date) {
            $this->enrollement_date = $enrollement_date;
        }
    }