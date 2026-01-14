<?php
    namespace App\Models\Entities;

    class Student {
        private ?int $id = null ;
        private string $name;
        private string $email;
        private string $password;

        public function __construct(string $name , string $email , string $password) {
            $this->setName($name);
            $this->setEmail($email);
            $this->setPassword($password);
        }
        public function setId(int $id) {
            $this->id = $id;
        }
        public function getId() {
            return $this->id;
        }
        public function setName(string $name) {
            if (!empty($name)) {
                $this->name = $name;
            }
        }
        public function getName() {
            return $this->name;
        }
        public function setEmail(string $email) {
            if (filter_var($email , FILTER_VALIDATE_EMAIL) && !empty($email)) {
                $this->email = $email;
            }
        }
        public function getEmail() {
            return $this->email;
        }
        public function setPassword(string $password) {
            if (!empty($password)) {
                $this->password = $password;
            }
        }
        public function getPassword() {
            return $this->password;
        }
    }