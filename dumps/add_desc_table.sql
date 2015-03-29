--
--
USE faf_unit_db_v2;
--
CREATE TABLE descriptions (
	blueprint_id		VARCHAR(7) NOT NULL,
	description		VARCHAR(1000) NOT NULL,
    user_id			VARCHAR(40) NOT NULL,
	submitted_on		TIMESTAMP DEFAULT NOW(),
	approved		BIT DEFAULT null,
	PRIMARY KEY (blueprint_id, submitted_on),
	FOREIGN KEY fk_descriptions_to_units (blueprint_id) REFERENCES units(blueprint_id),
    FOREIGN KEY fk_descriptions_to_users (user_id) REFERENCES users(user_id)
);