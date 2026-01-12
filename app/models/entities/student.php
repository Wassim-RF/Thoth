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
            $this->name = $name;
        }
        public function getName() {
            return $this->name;
        }
        public function setEmail(string $email) {
            $this->email = $email;
        }
        public function getEmail() {
            return $this->email;
        }
        public function setPassword(string $password) {
            $this->password = $password;
        }
        public function getPassword() {
            return $this->password;
        }
    }