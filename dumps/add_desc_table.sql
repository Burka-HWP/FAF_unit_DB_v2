--
--
USE faf_unit_db_v2;
--
CREATE TABLE descriptions (
	desc_id				INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
	blueprint_id		VARCHAR(7) NOT NULL,
	description		VARCHAR(1000) NOT NULL,
    user_id			VARCHAR(40) NOT NULL,
	submitted_on		TIMESTAMP DEFAULT NOW(),
	approved		BIT DEFAULT null,
	FOREIGN KEY fk_descriptions_to_units (blueprint_id) REFERENCES units(blueprint_id),
    FOREIGN KEY fk_descriptions_to_users (user_id) REFERENCES users(user_id)
);