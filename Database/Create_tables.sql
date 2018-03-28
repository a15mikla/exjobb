DROP database if exists experiment;
CREATE database experiment;
USE experiment;

CREATE TABLE dataTinyBLOB (
	id INT auto_increment,
    JSONdata TINYBLOB,
    PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE dataBLOB (
	id INT auto_increment,
    JSONdata BLOB,
    PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE dataMediumBLOB (
	id INT auto_increment,
    JSONdata MEDIUMBLOB,
    PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE dataLongBLOB (
	id INT auto_increment,
    JSONdata LONGBLOB,
    PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE dataJSON (
	id INT auto_increment,
    JSONdata JSON,
    PRIMARY KEY (id)
) ENGINE=InnoDB;