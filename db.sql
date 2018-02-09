CREATE DATABASE PHPHackGame;
GO

USE PHPHackGame;
CREATE TABLE dbo.Hackers (
   HackerID int NOT NULL AUTO_INCREMENT,
   FirstName varchar(25),
   LastName varchar(30),
   EmailAd varchat(320) NOT NULL,
   PRIMARY KEY (HackerID)
   );