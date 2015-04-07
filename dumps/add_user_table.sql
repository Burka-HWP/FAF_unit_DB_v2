CREATE TABLE IF NOT EXISTS `users` (
	user_id			varchar(40) not null,
 	user_faction	varchar(10) not null,
    password 	    varchar(32) not null,
    role			varchar(20) default 'User' not null,
    created_on		timestamp default now(),
    PRIMARY KEY (user_id)
);

insert into users (user_id, user_faction, password, role) values 
	('Burka', 'cybran', md5('meow'), 'Admin'),
	('Luxy', 'seraphim', md5('meow'), 'User'),
	('BRNK', 'uef', md5('meow'), 'User');



