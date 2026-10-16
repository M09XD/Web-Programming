CREATE DATABASE IF NOT EXISTS electricity_bill;
USE electricity_bill;
DROP TABLE IF EXISTS bill_info;
CREATE TABLE bill_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Location VARCHAR(30) NOT NULL,
    Area VARCHAR(10) NOT NULL,
    Rate1 DECIMAL(6,2) NOT NULL,
    Rate2 DECIMAL(6,2) NOT NULL,
    Rate3 DECIMAL(6,2) NOT NULL,
    Tax INT NOT NULL
);
INSERT INTO bill_info (Location, Area, Rate1, Rate2, Rate3, Tax) VALUES
('Dhaka','Urban',4.19,5.72,6.00,20),
('Dhaka','Rural',3.19,4.72,5.00,20),
('Chittagong','Urban',3.50,4.80,5.23,15),
('Chittagong','Rural',2.50,3.80,4.23,15);
