# MySQL dump of database 'dbteste' on host 'localhost'
# backup date and time: 13.10.2013 21:02 Uhr
# built by phpMyBackupPro v.2.4
# http://www.phpMyBackupPro.net

### used character set: utf8 ###
set names utf8;


### drop all tables first ###

DROP TABLE IF EXISTS `amizade`;
DROP TABLE IF EXISTS `status`;
DROP TABLE IF EXISTS `player`;


### structure of table `player` ###

CREATE TABLE `player` (
  `id_player` int(11) NOT NULL AUTO_INCREMENT,
  `p_nome` varchar(45) NOT NULL DEFAULT 'joao',
  PRIMARY KEY (`id_player`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 AUTO_INCREMENT=7;


### data of table `player` ###

insert into `player` values ('2', 'jose');
insert into `player` values ('3', 'maria');
insert into `player` values ('4', 'vinne');
insert into `player` values ('5', 'hiruma');
insert into `player` values ('6', 'carlos');


### structure of table `status` ###

CREATE TABLE `status` (
  `st_forca` int(11) DEFAULT '10',
  `player_id_player` int(11) NOT NULL,
  PRIMARY KEY (`player_id_player`),
  CONSTRAINT `fk_status_player` FOREIGN KEY (`player_id_player`) REFERENCES `player` (`id_player`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


### data of table `status` ###

insert into `status` values ('10', '2');
insert into `status` values ('10', '3');
insert into `status` values ('10', '4');
insert into `status` values ('10', '6');


### structure of table `amizade` ###

CREATE TABLE `amizade` (
  `a_id_player` int(11) NOT NULL,
  `a_id_amigo` int(11) NOT NULL,
  PRIMARY KEY (`a_id_player`,`a_id_amigo`),
  KEY `fk_amizade_player2_idx` (`a_id_amigo`),
  CONSTRAINT `fk_amizade_player1` FOREIGN KEY (`a_id_player`) REFERENCES `player` (`id_player`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_amizade_player2` FOREIGN KEY (`a_id_amigo`) REFERENCES `player` (`id_player`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


### data of table `amizade` ###

insert into `amizade` values ('2', '3');
