DROP TABLE IF EXISTS Commento_ins;
DROP TABLE IF EXISTS Commento;
DROP TABLE IF EXISTS Snowboard;
DROP TABLE IF EXISTS Caschi;
DROP TABLE IF EXISTS Scarponi;
DROP TABLE IF EXISTS Ciaspole;
DROP TABLE IF EXISTS Piccozze;
DROP TABLE IF EXISTS Sci;
DROP TABLE IF EXISTS Mountainbike;
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
Url_immagine char(50) NOT NULL,
Descrizione varchar(255) NOT NULL,
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
Url_immagine char(50) NOT NULL,
Descrizione varchar(255) NOT NULL,
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
Url_immagine char(50) NOT NULL,
Descrizione varchar(255) NOT NULL,
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
Url_immagine char(50) NOT NULL,
Descrizione varchar(255) NOT NULL,
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
Url_immagine char(50) NOT NULL,
Descrizione varchar(255) NOT NULL,
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
Url_immagine char(50) NOT NULL,
Descrizione varchar(255) NOT NULL,
FOREIGN KEY (Id_s) REFERENCES Id_oggetti(Id_oggetto)
ON DELETE CASCADE
ON UPDATE NO ACTION
) ENGINE=InnoDB;

CREATE TABLE Mountainbike
(
Id_s int,
Prezzo double NOT NULL,
Marca char(20) NOT NULL,
Modello char(20) NOT NULL,
Url_immagine char(50) NOT NULL,
Descrizione varchar(255) NOT NULL,
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
VALUES ('1'),('2'),('3'),('4'),('5'),('6'),('7'),('8'),('9'),('10'),('11'),('12'),('13'),('14');

INSERT INTO Sci (Id_s, Prezzo, Marca, Modello, Url_immagine, Descrizione)
VALUES ('1','200','Rossignol','Pursuit','img/Prodotti/Sci/sciuno.jpg','Adatti a tutti, sci per ogni tipo di neve. Molto leggeri.'),
	   ('2','599','Atomic','Atomic Redster','img/Prodotti/Sci/scicinque.jpg','Adatti ad esperti, sci per ogni tipo di neve. Molto leggeri.'),
	   ('3','385','Atomic','Cloud 11','img/Prodotti/Sci/scisei.jpg','Adatti a bambini, sci molto leggere, molto divertenti essendo molto larghi.'),
	   ('4','289','Atomic','Backland 85','img/Prodotti/Sci/scisette.jpg','Adatti a ogni persona, sci per ogni tipo di neve. Molto leggeri.'),
	   ('5','400','Rossignol','Pursuit 400','img/Prodotti/Sci/sciuno.jpg','Adatti alle donno, sci da gara, adatti a slalom speciale. Molto leggeri.'),
	   ('6','450','Rossignol','Bc 125','img/Prodotti/Sci/sciotto.jpg','Campioni mondiale dello scorso anno, assolutamente da provare.'),
	   ('7','350','Head','Wc rebels','img/Prodotti/Sci/scinove.jpg','Adatti a ogni tutti, sci per ogni tipo di neve. Molto leggeri.');

INSERT INTO Scarponi (Id_s, Prezzo, Marca, Modello, Url_immagine, Descrizione)
VALUES ('8','250','Atomic','Hawk','img/Prodotti/Scarponi/scarponeuno.jpg','Scarponi di ottima fattura. Adatti ad esperti, molto rigidi ma ottimo per agonisti.');

INSERT INTO Ciaspole (Id_s, Prezzo, Marca, Modello, Url_immagine, Descrizione)
VALUES ('9','89','Ferrino','Castor','img/Prodotti/Ciaspole/ciaspoleuno.jpg','Modello molto comodo adatto a lunghe camminate.');

INSERT INTO Caschi (Id_s, Prezzo, Marca, Modello, Url_immagine, Descrizione)
VALUES ('10','150','Bolle','Backline','img/Prodotti/Caschi/caschiuno.jpg','Casco molto rigido, protezione ottima, adatto a gare.');

INSERT INTO Snowboard (Id_s, Prezzo, Marca, Modello, Url_immagine, Descrizione)
VALUES ('11','150','Burton','Flight','img/Prodotti/Snowboard/snowboarduno.jpg','Tavola molto rigida, adatta a gare.'),
	   ('12','150','Burton','Flight attends','img/Prodotti/Snowboard/snowboarddue.jpg','Tavola molto rigida, adatta a gente molto esperte, se usata nel modo giusto regala ottime soddisfazioni.');

INSERT INTO Mountainbike (Id_s, Prezzo, Marca, Modello, Url_immagine, Descrizione)
VALUES ('13','150','Speedmax','cf slx 9','img/Prodotti/Bici/biciuno.jpg','La punta di diamante dei nostri prodotti, la migliore nel suo campo.');

INSERT INTO Piccozze (Id_s, Prezzo, Marca, Modello, Url_immagine, Descrizione)
VALUES ('14','150','Alpin','tour 9000','img/Prodotti/Martelli/martellouno.jpg','La punta di diamante dei nostri prodotti, la migliore nel suo campo.');

INSERT INTO Commento (Id_commento,Testo)
VALUES ('1','Questi sci della Atomic sono il massimo, sono come la redbull ti mettono le ali e ti portano dal grande padre'),
	   ('2','Mia madre li ha venduti il giorno stesso perche erano troppo veloci per me'),
	   ('3','Si sono rotti quando gli ho tirati in testa a mio cugino, sono deluso');

INSERT INTO Commento_ins (Id_com, Id_ogg, Id_ut)
VALUES ('1','2','1'),
	   ('2','2','2'),
	   ('3','3','1');