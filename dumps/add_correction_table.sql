CREATE TABLE IF NOT EXISTS `corrections` (
	id				integer not null auto_increment,
	user_id			varchar(40) not null,
 	correction		varchar(140) not null,
    submitted_on	timestamp default now(),
    approved  		bit default null,
    PRIMARY KEY (id)
);


