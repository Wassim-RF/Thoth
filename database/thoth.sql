CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    description TEXT NOT NULL,
    lessons_number INT NOT NULL,
    week_duration INT NOT NULL,
    picture_link VARCHAR(255) DEFAULT 'https://foundr.com/wp-content/uploads/2021/09/Best-online-course-platforms.png'
);

CREATE TABLE IF NOT EXISTS enrollments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    course_id INT NOT NULL,
    enrollment_pourcentage DECIMAL(3.1 ) DEFAULT 00.0,
    enrollment_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

--@block
DROP TABLE enrollments;
DROP TABLE courses;
DROP TABLE students;