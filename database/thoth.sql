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
    course_creator VARCHAR(100) NOT NULL,
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

--@block
INSERT INTO courses (title, description, lessons_number, week_duration, course_creator, picture_link) VALUES
(
    'PHP MVC Fundamentals',
    'Learn how to build scalable web applications using PHP with MVC architecture.',
    24,
    8,
    'Wassim Rifi',
    'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFXbD1EKnh1XJ7JLyAvxAKJrpAfPkj-VolhA&s'
),
(
    'Modern JavaScript',
    'Master JavaScript ES6+, DOM manipulation, and asynchronous programming.',
    30,
    10,
    'Wassim Rifi',
    'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPlfus86Ilc4aJCrHMQOvjg5servOzJqvtcg&s'
),
(
    'HTML & CSS from Scratch',
    'Build beautiful and responsive websites using HTML5 and CSS3.',
    20,
    6,
    'Wassim Rifi',
    'https://kajabi-storefronts-production.kajabi-cdn.com/kajabi-storefronts-production/file-uploads/themes/2157687457/settings_images/a872424-30b1-d3af-c73d-cff07afec57a_91c96119-44b5-4089-b438-fcfcf5325b7e.webp'
),
(
    'MySQL Database Design',  
    'Understand relational databases, SQL queries, and database optimization.',
    18,
    5,
    'Wassim Rifi',
    'https://www.mysql.com/common/logos/logo-mysql-170x115.png'
),
(
    'Full-Stack Web Project',
    'Create a complete web application from frontend to backend.',
    40,
    12,
    'Wassim Rifi',
    'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR66maIr-B_TplbH64YHH6iRFpe66vwI26gww&s'
);
