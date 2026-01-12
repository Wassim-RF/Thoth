CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    picture VARCHAR(255) DEFAULT NULL,
    gender ENUM('male','female','other') NOT NULL
);

CREATE TABLE IF NOT EXISTS courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    description TEXT NOT NULL,
    picture VARCHAR(255) DEFAULT NULL,
    instructor VARCHAR(100) NOT NULL,
    instructor_picture VARCHAR(255) DEFAULT NULL,
    free BOOLEAN DEFAULT FALSE,
    rating DECIMAL(2,1) NOT NULL DEFAULT 0.0,
    level ENUM('beginner','intermediate','advanced') NOT NULL
);

CREATE TABLE IF NOT EXISTS enrollments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    course_id INT NOT NULL,
    enrollment_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    completion_rate DECIMAL(5,2) NOT NULL DEFAULT 0.00,
    CONSTRAINT fk_student FOREIGN KEY (student_id) REFERENCES students(id) ON DELETE CASCADE,
    CONSTRAINT fk_course FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE,
    UNIQUE KEY unique_enrollment (student_id, course_id)
);

--@block
DROP TABLE enrollments;
DROP TABLE courses;
DROP TABLE students;