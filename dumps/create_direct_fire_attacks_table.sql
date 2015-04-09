-- create direct-fire attacks tables

DROP TABLE IF EXISTS `attacks_direct_fire_normal`;
DROP TABLE IF EXISTS `attacks_direct_fire_overcharge`;
DROP TABLE IF EXISTS `attacks_direct_fire_emp`;

CREATE TABLE IF NOT EXISTS `attacks_direct_fire_normal` (
	id						INTEGER NOT NULL AUTO_INCREMENT,
	blueprint_id			VARCHAR(10) NOT NULL,
	display_name			VARCHAR(45) DEFAULT NULL,
	turret_pitch			INTEGER DEFAULT NULL,
	turret_pitch_speed		INTEGER DEFAULT NULL,
	turret_pitch_range		INTEGER DEFAULT NULL,
	turret_yaw				INTEGER DEFAULT NULL,
	turret_yaw_speed		INTEGER DEFAULT NULL,
	turret_yaw_range		INTEGER DEFAULT NULL,
	firing_volley_length 	DECIMAL(4,2) DEFAULT NULL,
	projectiles_per_volley	DECIMAL(4,2) DEFAULT NULL,
	volleys_per_cycle		INTEGER DEFAULT NULL,
	cycle_reload_length		DECIMAL(4,2) DEFAULT NULL,
	damage_per_projectile	INTEGER DEFAULT NULL,
	damage_radius			DECIMAL(4,2) DEFAULT NULL,			
	muzzle_velocity			INTEGER DEFAULT NULL,
	max_radius				INTEGER DEFAULT NULL,
	min_radius				INTEGER DEFAULT NULL,
	firing_tolerance		INTEGER DEFAULT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS `attacks_direct_fire_overcharge` (
	id						INTEGER NOT NULL AUTO_INCREMENT,
	blueprint_id			VARCHAR(10) NOT NULL,
	display_name			VARCHAR(45) DEFAULT NULL,
	turret_pitch			INTEGER DEFAULT NULL,
	turret_pitch_speed		INTEGER DEFAULT NULL,
	turret_pitch_range		INTEGER DEFAULT NULL,
	turret_yaw				INTEGER DEFAULT NULL,
	turret_yaw_speed		INTEGER DEFAULT NULL,
	turret_yaw_range		INTEGER DEFAULT NULL,
	firing_volley_length 	DECIMAL(4,2) DEFAULT NULL,
	projectiles_per_volley	DECIMAL(4,2) DEFAULT NULL,
	volleys_per_cycle		INTEGER DEFAULT NULL,
	cycle_reload_length		DECIMAL(4,2) DEFAULT NULL,
	damage_per_projectile	INTEGER DEFAULT NULL,
	damage_radius			DECIMAL(4,2) DEFAULT NULL,			
	muzzle_velocity			INTEGER DEFAULT NULL,
	max_radius				INTEGER DEFAULT NULL,
	min_radius				INTEGER DEFAULT NULL,
	firing_tolerance		INTEGER DEFAULT NULL,
	energy_storage_req		INTEGER DEFAULT NULL,
	energy_cost				INTEGER DEFAULT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS `attacks_direct_fire_emp` (
	id						INTEGER NOT NULL AUTO_INCREMENT,
	blueprint_id			VARCHAR(10) NOT NULL,
	display_name			VARCHAR(45) DEFAULT NULL,	
	death_aoe				DECIMAL(4,2) DEFAULT NULL,
	max_radius				INTEGER DEFAULT NULL,
	min_radius				INTEGER DEFAULT NULL,
	PRIMARY KEY (id)
);
