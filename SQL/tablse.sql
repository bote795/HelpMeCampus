REATE TABLE info (

	id	INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,  

	username VARCHAR(50) NOT NULL,

	name TINYTEXT NOT NULL,

	password VARCHAR(128) NOT NULL,

	email TINYTEXT NOT NULL,

	major TINYTEXT NOT NULL,

	school TINYTEXT NOT NULL,

	grad_yr	INTEGER NOT NULL,

	appartment_name TINYTEXT NOT NULL,	

	adress TINYTEXT NOT NULL,	

	floor	INTEGER NOT NULL,

	room_num INTEGER NOT NULL,

	active	TINYINT NOT NULL DEFAULT 0, 

	PRIMARY KEY (id),

	UNIQUE KEY invt_ak (username),

);



CREATE TABLE confirm (

  id int(11) NOT NULL auto_increment,

  userid varchar(128) NOT NULL default '',

  key varchar(128) NOT NULL default '',

  email varchar(250) default NULL,

  PRIMARY KEY  (`id`)

);
