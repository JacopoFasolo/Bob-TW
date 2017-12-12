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

CREATE TABLE Attrezzatura
(
)ENGINE=InnoDB;

CREATE TABLE Attrezzaturanoleggio
(
)ENGINE=InnoDB;
.

CREATE TABLE Commento
(
Id_commento int AUTO_INCREMENT primary key,
Testo memo,
)ENGINE=InnoDB;

CREATE TABLE Commentoins
(
)ENGINE=InnoDB;