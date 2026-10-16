CREATE DATABASE IF NOT EXISTS tourism;
USE tourism;
DROP TABLE IF EXISTS tourist_spot;
CREATE TABLE tourist_spot (
    SpotID INT PRIMARY KEY,
    SpotName VARCHAR(50) NOT NULL,
    Region VARCHAR(10) NOT NULL,
    Category VARCHAR(30) NOT NULL,
    Rating DECIMAL(3,1) NOT NULL,
    EntryFee DECIMAL(10,2) NOT NULL,
    VisitorsPerYear INT NOT NULL
);
INSERT INTO tourist_spot VALUES
(1,'Cox''s Bazar Beach','CTG','Beach',4.9,0,150000),
(2,'Sundarbans Forest','KHL','Nature',4.3,150,80000),
(3,'Ratargul Forest','SYL','Nature',4.8,100,60000),
(4,'Kuakata Beach','PTU','Beach',4.5,0,90000),
(5,'Shat Gambuj Mosque','BGH','Heritage',4.7,30,70000),
(6,'Paharpur','NWG','Heritage',4.1,30,40000);
