CREATE DATABASE db_artistes CHARACTER SET 'utf8';
USE db_artistes;

CREATE TABLE pays(
	id int NOT NULL AUTO_INCREMENT,
	pays varchar(50) NOT NULL,
	PRIMARY KEY(id)	
) ENGINE=MyISAM DEFAULT CHARSET='utf8';

CREATE TABLE instrument(
	id int NOT NULL AUTO_INCREMENT,
	instrument varchar(50) NOT NULL,
	PRIMARY KEY(id)	
) ENGINE=MyISAM DEFAULT CHARSET='utf8';

CREATE TABLE style(
	id int NOT NULL AUTO_INCREMENT,
	style varchar(50) NOT NULL,
	PRIMARY KEY(id)
) ENGINE=MyISAM DEFAULT CHARSET='utf8';

CREATE TABLE musiciens (
  id int(11) NOT NULL,
  nom varchar(100) NOT NULL,
  prenom varchar(100) NOT NULL,
  instrument_id varchar(100) NOT NULL,
  style_id varchar(100) NOT NULL,
  pays_id varchar(100) NOT NULL,
  naissance date NOT NULL,
  detail text NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET='utf8';

ALTER TABLE musiciens
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;


