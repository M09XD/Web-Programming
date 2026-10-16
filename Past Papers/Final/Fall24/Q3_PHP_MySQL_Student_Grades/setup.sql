CREATE DATABASE IF NOT EXISTS uiuweb_final;
USE uiuweb_final;
DROP TABLE IF EXISTS student_final;
CREATE TABLE student_final (
    StudentID INT PRIMARY KEY,
    StudentName VARCHAR(50) NOT NULL,
    CourseID INT NOT NULL,
    CourseTitle VARCHAR(60) NOT NULL,
    Grade INT NOT NULL,
    LetterGrade VARCHAR(2) NOT NULL
);
INSERT INTO student_final VALUES
(1,'Karim Uddin',101,'Web Programming',85,'B'),
(2,'Rahim Ahmed',101,'Web Programming',92,'A'),
(3,'Jashim Hossain',102,'Project Management',78,'C'),
(4,'Jasica Ahmed',101,'Web Programming',65,'D'),
(5,'Faria Karim',102,'Project Management',95,'A'),
(6,'Niassoh Dihan',103,'System Analysis and Design',80,'B');
