
CREATE TABLE users (
    Id int(10) unsigned PRIMARY KEY AUTO_INCREMENT,
    Name varchar(25),
    Email varchar(25), 
    Year Date,
    Sex char(1),
    Col_con char(2),
    Sverh varchar(50),
    Biography varchar(100)
);