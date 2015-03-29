CREATE TABLE IF NOT EXISTS `feedbacks` (
	id				integer not null auto_increment,
	user_id			varchar(40) not null,
 	feedback		varchar(140) not null,
    submitted_on	timestamp default now(),
    PRIMARY KEY (id)
);


