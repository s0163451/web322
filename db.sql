
CREATE TABLE users (
    Id int(10) unsigned PRIMARY KEY AUTO_INCREMENT,
    imya varchar(25),
    email varchar(25), 
    god Date,
    sex char(1),
    col char(2),
    sverh varchar(50),
    biography varchar(100)
);
CREATE TABLE user_power (
Id int(10) unsigned NOT NULL,
power varchar(128) NOT NULL DEFAULT '',
PRIMARY KEY (id, power)
);