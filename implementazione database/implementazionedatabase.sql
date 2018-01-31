DROP TABLE IF EXISTS Commento_ins;
DROP TABLE IF EXISTS Commento;
DROP TABLE IF EXISTS Snowboard;
DROP TABLE IF EXISTS Caschi;
DROP TABLE IF EXISTS Scarponi;
DROP TABLE IF EXISTS Ciaspole;
DROP TABLE IF EXISTS Piccozze;
DROP TABLE IF EXISTS Sci;
DROP TABLE IF EXISTS Id_oggetti;
DROP TABLE IF EXISTS Biglietti;
DROP TABLE IF EXISTS Utente;

CREATE TABLE Utente
(
Id_utente int AUTO_INCREMENT primary key,
Username char(16) NOT NULL,
Email varchar(50) NOT NULL,
Password varchar(100) NOT NULL,
Nome varchar(50) NOT NULL,
Cognome varchar(50) NOT NULL,
Sesso enum('M','F') NOT NULL,
Data_Nascita date NOT NULL
) ENGINE=InnoDB;

CREATE TABLE Biglietti
(
Id_biglietto int AUTO_INCREMENT primary key,
Durata enum('Giornaliero','Settimanale','Bisettimanale','Dieciingressi','Mezzastagione','Stagionale') NOT NULL,
Tipo enum('Interoas','Interobs','Ridottoas','Ridottobs') NOT NULL,
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
Id_ogg int,
Id_ut int,
FOREIGN KEY (Id_com) REFERENCES Commento(Id_commento),
FOREIGN KEY (Id_ogg) REFERENCES Id_oggetti(Id_oggetto),
FOREIGN KEY (Id_ut) REFERENCES Utente(Id_utente)
ON DELETE CASCADE
ON UPDATE NO ACTION  
)ENGINE=InnoDB;

INSERT INTO Utente (Username, Email, Password, Nome, Cognome, Sesso, Data_Nascita)
VALUES ('BOB','bob@bob.bob','bob','Bob','Bob','M','1993-12-25');

INSERT INTO Id_oggetti (Id_oggetto)
VALUES ('1'),('2');

INSERT INTO Sci (Id_s, Prezzo, Marca)
VALUES ('1','200','Rossignol'),('2','400','Atomic');