CREATE TABLE Utente
(
Username char(16) primary key,
Email varchar(50) NOT NULL,
Password varchar(20) NOT NULL,
Cognome varchar(50) NOT NULL,
Sesso enum("M","F") NOT NULL,
Data_Nascita date NOT NULL
) ENGINE=InnoDB;

CREATE TABLE Biglietti
(
Id_biglietto int AUTO_INCREMENT primary key,
Durata enum("Giornaliero","Settimanale","Bisettimanale","Dieciingressi","Mezzastagione","Stagionale") NOT NULL,
Tipo enum("Interoas","Interobs","Ridottoas","Ridottobs") NOT NULL,
Prezzo double NOT NULL,
Data_Inizio date NOT NULL,
Data_Fine date NOT NULL
)ENGINE=InnoDB;

CREATE TABLE Id_oggetti
(
Id_oggetto int AUTO_INCREMENT primary key
)ENGINE=InnoDB;

CREATE TABLE Sci
(
Id_s int,
Prezzo double NOT NULL,
Marca char(16) NOT NULL,
FOREIGN KEY (Id_s) REFERENCES Id_oggetti(Id_oggetto)
 	ON DELETE CASCADE
    ON UPDATE NO ACTION
) ENGINE=InnoDB;

CREATE TABLE Piccozze
(
Id_p int,
Prezzo double NOT NULL,
Marca char(16) NOT NULL,
FOREIGN KEY (Id_p) REFERENCES Id_oggetti(Id_oggetto)
 	ON DELETE CASCADE
    ON UPDATE NO ACTION
) ENGINE=InnoDB;

CREATE TABLE Ciaspole
(
Id_c int,
Prezzo double NOT NULL,
Marca char(16) NOT NULL,
FOREIGN KEY (Id_c) REFERENCES Id_oggetti(Id_oggetto)
 	ON DELETE CASCADE
    ON UPDATE NO ACTION
) ENGINE=InnoDB;

CREATE TABLE Scarponi
(
Id_sc int,
Prezzo double NOT NULL,
Marca char(16) NOT NULL,
FOREIGN KEY (Id_sc) REFERENCES Id_oggetti(Id_oggetto)
 	ON DELETE CASCADE
    ON UPDATE NO ACTION
) ENGINE=InnoDB;

CREATE TABLE Caschi
(
Id_ca int,
Prezzo double NOT NULL,
Marca char(16) NOT NULL,
FOREIGN KEY (Id_ca) REFERENCES Id_oggetti(Id_oggetto)
 	ON DELETE CASCADE
    ON UPDATE NO ACTION
) ENGINE=InnoDB;

CREATE TABLE Snowboard
(
Id_sn int,
Prezzo double NOT NULL,
Marca char(16) NOT NULL,
FOREIGN KEY (Id_sn) REFERENCES Id_oggetti(Id_oggetto)
 	ON DELETE CASCADE
    ON UPDATE NO ACTION
) ENGINE=InnoDB;

CREATE TABLE Commento
(
Id_commento int AUTO_INCREMENT primary key,
Testo varchar(255) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE Commento_ins
(
Id_com int,
id_ogg int,
FOREIGN KEY (Id_com) REFERENCES Commento(Id_commento),
FOREIGN KEY (Id_ogg) REFERENCES Id_oggetti(Id_oggetto),
 	ON DELETE CASCADE
    ON UPDATE NO ACTION
    
)ENGINE=InnoDB;