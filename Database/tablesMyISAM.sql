DROP database if exists experiment;
CREATE database experiment;
USE experiment;
SET GLOBAL max_allowed_packet=1073741824;

CREATE TABLE dataTinyBLOB (
	id INT auto_increment,
    JSONdata TINYBLOB,
    PRIMARY KEY (id)
) ENGINE=MyISAM;

CREATE TABLE dataBLOB (
	id INT auto_increment,
    JSONdata BLOB,
    PRIMARY KEY (id)
) ENGINE=MyISAM;

CREATE TABLE dataMediumBLOB (
	id INT auto_increment,
    JSONdata MEDIUMBLOB,
    PRIMARY KEY (id)
) ENGINE=MyISAM;

CREATE TABLE dataLongBLOB (
	id INT auto_increment,
    JSONdata LONGBLOB,
    PRIMARY KEY (id)
) ENGINE=MyISAM;

CREATE TABLE dataJSON (
	id INT auto_increment,
    JSONdata JSON,
    PRIMARY KEY (id)
) ENGINE=MyISAM;