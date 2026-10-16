CREATE DATABASE IF NOT EXISTS uiutech_final;
USE uiutech_final;
DROP TABLE IF EXISTS employee_final;
CREATE TABLE employee_final (
    EmployeeID INT PRIMARY KEY,
    EmployeeName VARCHAR(50) NOT NULL,
    DepartmentID INT NOT NULL,
    DepartmentName VARCHAR(60) NOT NULL,
    Salary DECIMAL(10,2) NOT NULL,
    PerformanceRating VARCHAR(2) NOT NULL
);
INSERT INTO employee_final VALUES
(1,'Arif Rahman',201,'Software Development',45000,'B'),
(2,'Marium Khan',201,'Software Development',52000,'A'),
(3,'Sabbir Hossain',202,'Quality Assurance',38000,'C'),
(4,'Samira Begum',203,'UI/UX Design',42000,'B');
