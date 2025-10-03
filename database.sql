CREATE DATABASE submission_portal;
USE submission_portal;

CREATE TABLE submissions (
  id INT AUTO_INCREMENT PRIMARY KEY,
  student_name VARCHAR(100),
  file_path VARCHAR(255)
);
