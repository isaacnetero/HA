DROP TABLE amizade;

CREATE TABLE `amizade` (
  `a_id_player` int(11) NOT NULL,
  `a_id_amigo` int(11) NOT NULL,
  PRIMARY KEY (`a_id_player`,`a_id_amigo`),
  KEY `fk_amizade_player2_idx` (`a_id_amigo`),
  CONSTRAINT `fk_amizade_player1` FOREIGN KEY (`a_id_player`) REFERENCES `player` (`id_player`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_amizade_player2` FOREIGN KEY (`a_id_amigo`) REFERENCES `player` (`id_player`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO amizade VALUES("2","3");



DROP TABLE player;

CREATE TABLE `player` (
  `id_player` int(11) NOT NULL AUTO_INCREMENT,
  `p_nome` varchar(45) NOT NULL DEFAULT 'joao',
  PRIMARY KEY (`id_player`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO player VALUES("2","jose");
INSERT INTO player VALUES("3","maria");
INSERT INTO player VALUES("4","vinne");
INSERT INTO player VALUES("5","hiruma");
INSERT INTO player VALUES("6","carlos");



DROP TABLE status;

CREATE TABLE `status` (
  `st_forca` int(11) DEFAULT '10',
  `player_id_player` int(11) NOT NULL,
  PRIMARY KEY (`player_id_player`),
  CONSTRAINT `fk_status_player` FOREIGN KEY (`player_id_player`) REFERENCES `player` (`id_player`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO status VALUES("10","2");
INSERT INTO status VALUES("10","3");
INSERT INTO status VALUES("10","4");
INSERT INTO status VALUES("10","6");



