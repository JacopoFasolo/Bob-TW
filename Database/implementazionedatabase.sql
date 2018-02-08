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
Marca char(20) NOT NULL,
Modello char(20) NOT NULL,
Url_immagine char(20) NOT NULL,
FOREIGN KEY (Id_s) REFERENCES Id_oggetti(Id_oggetto)
ON DELETE CASCADE
ON UPDATE NO ACTION
) ENGINE=InnoDB;

CREATE TABLE Piccozze
(
Id_s int,
Prezzo double NOT NULL,
Marca char(20) NOT NULL,
Modello char(20) NOT NULL,
Url_immagine char(20) NOT NULL,
FOREIGN KEY (Id_s) REFERENCES Id_oggetti(Id_oggetto)
ON DELETE CASCADE
ON UPDATE NO ACTION
) ENGINE=InnoDB;

CREATE TABLE Ciaspole
(
Id_s int,
Prezzo double NOT NULL,
Marca char(20) NOT NULL,
Modello char(20) NOT NULL,
Url_immagine char(20) NOT NULL,
FOREIGN KEY (Id_s) REFERENCES Id_oggetti(Id_oggetto)
ON DELETE CASCADE
ON UPDATE NO ACTION
) ENGINE=InnoDB;

CREATE TABLE Scarponi
(
Id_s int,
Prezzo double NOT NULL,
Marca char(20) NOT NULL,
Modello char(20) NOT NULL,
Url_immagine char(20) NOT NULL,
FOREIGN KEY (Id_s) REFERENCES Id_oggetti(Id_oggetto)
ON DELETE CASCADE
ON UPDATE NO ACTION
) ENGINE=InnoDB;

CREATE TABLE Caschi
(
Id_s int,
Prezzo double NOT NULL,
Marca char(20) NOT NULL,
Modello char(20) NOT NULL,
Url_immagine char(20) NOT NULL,
FOREIGN KEY (Id_s) REFERENCES Id_oggetti(Id_oggetto)
ON DELETE CASCADE
ON UPDATE NO ACTION
) ENGINE=InnoDB;

CREATE TABLE Snowboard
(
Id_s int,
Prezzo double NOT NULL,
Marca char(20) NOT NULL,
Modello char(20) NOT NULL,
Url_immagine char(20) NOT NULL,
FOREIGN KEY (Id_s) REFERENCES Id_oggetti(Id_oggetto)
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
VALUES ('BOB','bob@bob.bob','9F9D51BC70EF21CA5C14F307980A29D8','Bob','Bob','M','1970-01-01'),
	   ('User','user@user.user','EE11CBB19052E40B07AAC0CA060C23EE','User','User','F','1990-12-12');

INSERT INTO Id_oggetti (Id_oggetto)
VALUES ('1'),('2'),('3'),('4'),('5'),('6'),('7'),('8'),('9'),('10');

INSERT INTO Sci (Id_s, Prezzo, Marca, Modello, Url_immagine)
VALUES ('1','200','Rossignol','Pursuit','URL'),
	   ('2','599','Atomic','Atomic Redster','URL'),
	   ('3','385','Atomic','Cloud 11','URL'),
	   ('4','289','Atomic','Backland 85','URL'),
	   ('5','400','Rossignol','Pursuit 400','URL'),
	   ('6','450','Rossignol','Bc 125','URL'),
	   ('7','350','Head','Wc rebels','URL');

INSERT INTO Scarponi (Id_s, Prezzo, Marca, Modello, Url_immagine)
VALUES ('8','250','Atomic','Hawk','URL');

INSERT INTO Ciaspole (Id_s, Prezzo, Marca, Modello, Url_immagine)
VALUES ('9','89','Ferrino','Castor','URL');

INSERT INTO Caschi (Id_s, Prezzo, Marca, Modello, Url_immagine)
VALUES ('10','150','Bollé','Backline','URL');

INSERT INTO Commento (Id_commento,Testo)
VALUES ('1','Questi sci della Atomic sono il massimo, sono come la redbull ti mettono le ali e ti portano dal grande padre'),
	   ('2','Mia madre li ha venduti il giorno stesso perche erano troppo veloci per me'),
	   ('3','Si sono rotti quando gli ho tirati in testa a mio cugino, sono deluso');

INSERT INTO Commento_ins (Id_com, Id_ogg, Id_ut)
VALUES ('1','2','1'),
	   ('2','2','2'),
	   ('3','3','1');