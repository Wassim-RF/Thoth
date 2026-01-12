<?php
    namespace App\Models\Entities;

class Courses {
    private ?int $id = null;
    private string $title;
    private string $description;

    public function __construct(string $title, string $description) {
        $this->setTitle($title);
        $this->setDescription($description);
    }

    public function getId() {
        return $this->id;
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle(string $title) {
        $this->title = $title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription(string $description) {
        $this->description = $description;
    }
}