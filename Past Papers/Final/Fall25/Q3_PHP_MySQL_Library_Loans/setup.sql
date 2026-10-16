CREATE DATABASE IF NOT EXISTS campus_library;
USE campus_library;
DROP TABLE IF EXISTS book_loans;
CREATE TABLE book_loans (
    LoanID INT PRIMARY KEY,
    StudentName VARCHAR(50) NOT NULL,
    BookTitle VARCHAR(50) NOT NULL,
    DaysOverdue INT NOT NULL,
    PenaltyFee DECIMAL(10,2) NOT NULL,
    Status VARCHAR(20) NOT NULL
);
INSERT INTO book_loans VALUES
(101,'Abdul','Data Structures',0,0.00,'Returned'),
(102,'Jabbar','Operating Systems',12,24.00,'Overdue'),
(103,'Barkat','Discrete Math',5,10.00,'Overdue'),
(104,'Rahim','Linear Algebra',2,4.00,'Overdue'),
(105,'Karim','Data Structures',15,30.00,'Lost'),
(106,'Fahim','Operating Systems',0,0.00,'Returned');
