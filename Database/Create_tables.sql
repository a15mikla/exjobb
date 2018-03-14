DROP DATABASE if exists practice;
CREATE DATABASE practice;
USE practice;

CREATE TABLE dataTinyBLOB (
	id INT,
    JSONdata TINYBLOB,
    PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE dataBLOB (
	id INT,
    JSONdata BLOB,
    PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE dataMediumBLOB (
	id INT,
    JSONdata MEDIUMBLOB,
    PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE dataLongBLOB (
	id INT,
    JSONdata LONGBLOB,
    PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE dataJSON (
	id INT,
    JSONdata JSON,
    PRIMARY KEY (id)
) ENGINE=InnoDB;