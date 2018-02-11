DROP TABLE IF EXISTS Commento_ins;
DROP TABLE IF EXISTS Commento;
DROP TABLE IF EXISTS Snowboard;
DROP TABLE IF EXISTS Caschi;
DROP TABLE IF EXISTS Scarponi;
DROP TABLE IF EXISTS Ciaspole;
DROP TABLE IF EXISTS Piccozze;
DROP TABLE IF EXISTS Sci;
DROP TABLE IF EXISTS Mountainbike;
DROP TABLE IF EXISTS Slittini;
DROP TABLE IF EXISTS Id_oggetti;
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

CREATE TABLE Slittini
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
VALUES ('1'),('2'),('3'),('4'),('5'),('6'),('7'),('8'),('9'),('10'),('11'),('12'),('13'),('14'),('15'),('16'),('17'),('18'),('19'),('20'),('21'),('22'),('23'),('24'),('25'),('26'),('27'),('28'),('29'),('30'),('31'),('32'),('33'),('34'),('35'),('36'),('37'),('38'),('39'),('40');

INSERT INTO Sci (Id_s, Prezzo, Marca, Modello, Url_immagine, Descrizione)
VALUES ('1','20','Rossignol','Pursuit 300','img/Prodotti/Sci/scidieci.jpg','Adatti a tutti, sci per ogni tipo di neve. Molto leggeri.'),
	   ('2','59','Atomic','Atomic Redster','img/Prodotti/Sci/scicinque.jpg','Adatti ad esperti, sci per ogni tipo di neve. Molto leggeri.'),
	   ('3','38','Atomic','Cloud 11','img/Prodotti/Sci/scisei.jpg','Adatti a bambini, sci molto leggere, molto divertenti essendo molto larghi.'),
	   ('4','28','Atomic','Backland 85','img/Prodotti/Sci/scisette.jpg','Adatti a ogni persona, sci per ogni tipo di neve. Molto leggeri.'),
	   ('5','40','Rossignol','Pursuit 100','img/Prodotti/Sci/sciuno.jpg','Adatti alle donno, sci da gara, adatti a slalom speciale. Molto leggeri.'),
	   ('6','45','Rossignol','Bc 125','img/Prodotti/Sci/sciotto.jpg','Campioni mondiale dello scorso anno, assolutamente da provare.'),
	   ('7','35','Head','Wc rebels','img/Prodotti/Sci/scinove.jpg','Adatti a ogni tutti, sci per ogni tipo di neve. Molto leggeri.');

INSERT INTO Scarponi (Id_s, Prezzo, Marca, Modello, Url_immagine, Descrizione)
VALUES ('8','25','Atomic','Hawk','img/Prodotti/Scarponi/scarponeuno.jpg','Scarponi di ottima fattura. Adatti ad esperti, molto rigidi ma ottimo per agonisti.'),
	   ('21','10','Roces','Black MP','img/Prodotti/Scarponi/scarponedue.jpg','Autoposizionamento della linguetta, fodera autoadattante e scafo in polipropilene, scarponi per bambini.'),
	   ('22','30','Head','FX GT','img/Prodotti/Scarponi/scarponetre.jpg','Easy Entry per una calzata ottimale tramite tirante, guscio leggero con plantare anatomico.'),
	   ('23','40','Burton','Kinder','img/Prodotti/Scarponi/scarponequattro.jpg','Sistema di chiusura Boa disponibile esclusivamente Burton, New England lacci e senza scarpa interna con imbottitura 3 m Thinsulate.'),
	   ('24','10','Burton','Grom Mini','img/Prodotti/Scarponi/scarponecinque.jpg','Easy Entry per una calzata ottimale tramite tirante, scarponi per bambini.');

INSERT INTO Ciaspole (Id_s, Prezzo, Marca, Modello, Url_immagine, Descrizione)
VALUES ('9','20','Ferrino','Castor','img/Prodotti/Ciaspole/ciaspoleuno.jpg','Modello molto comodo adatto a lunghe camminate.'),
       ('25','25','Powder Ridge','Crest Series','img/Prodotti/Ciaspole/ciaspoledue.jpg','Estremamente leggero e stabile sono racchette da neve per tutte le esigenze.'),
       ('26','20','TSL','Rookie','img/Prodotti/Ciaspole/ciaspoletre.jpg','Estremamente leggero adatte sopprattuto ai bambini.'),
       ('27','20','Enkeeo ','Enk 3000','img/Prodotti/Ciaspole/ciaspoletre.jpg','Il design ergonomico e aerodinamico e una coda arrotondata leggermente arricciata, le racchette da neve garantiscono una passeggiata comoda e facile per il vostro trekking e climbing.'),
       ('28','20','Snow Glider','Gli sn','img/Prodotti/Ciaspole/ciaspolecinque.jpg','Racchette da neve in alluminio con borsa per il trasporto, disponibili in diversi colori.');

INSERT INTO Caschi (Id_s, Prezzo, Marca, Modello, Url_immagine, Descrizione)
VALUES ('10','20','Bolle','Backline','img/Prodotti/Caschi/caschiuno.jpg','Casco molto rigido, protezione ottima, adatto a gare.'),
	   ('18','25','Poc','Skull X','img/Prodotti/Caschi/caschidue.jpg','Adatto per snowboard e sci alpino.'),
	   ('19','10','Awe','Rose','img/Prodotti/Caschi/caschitre.jpg','Sfiati di raffreddamento regolabili, isolamento termico extra. Casco per ragazze.'),
	   ('20','30','Briko','Canyon','img/Prodotti/Caschi/caschiquattro.jpg','Il meglio della tecnologia in moulding per una leggerezza estrema che si unisce al confort del fit interno termoformato e con trattamento Polygiene.'),
	   ('40','10','Briko','Mammoth','img/Prodotti/Caschi/caschicinque.jpg','Sfiati di raffreddamento regolabili, presenza di Roll Fit, adatto a sci alpino e snowboard.');

INSERT INTO Snowboard (Id_s, Prezzo, Marca, Modello, Url_immagine, Descrizione)
VALUES ('11','40','Burton','Flight','img/Prodotti/Snowboard/snowboarduno.jpg','Tavola molto rigida, adatta a gare.'),
	   ('12','20','Burton','Flight attends','img/Prodotti/Snowboard/snowboarddue.jpg','Tavola molto rigida, adatta a gente molto esperta, se usata nel modo giusto regala ottime soddisfazioni.'),
	   ('15','75','Rossignol','XV 163','img/Prodotti/Snowboard/snowboardtre.jpg','Tavola morbida, adatta a neve meno battuta. Consigliato usarla solo negli snowpark.'),
	   ('16','50','Jones','Explorer 2018','img/Prodotti/Snowboard/snowboardquattro.jpg','Uno degli ultimi modelli usciti della jones. Questa tavola risulta adatta a tutti sia inesperti che esperti.'),
	   ('17','30','Jones','Twin Mountain','img/Prodotti/Snowboard/snowboardcinque.jpg','Modello con estetica molto accattivante. Tavola stretta rispetto allo standard, per questo si consiglia di usarla in pista.');

INSERT INTO Mountainbike (Id_s, Prezzo, Marca, Modello, Url_immagine, Descrizione)
VALUES ('13','200','Speedmax','cf slx 9','img/Prodotti/Bici/biciuno.jpg','La punta di diamante dei nostri prodotti, la migliore nel suo campo, le sue ruote fine la renddono adatta a impervi percorsi, la sua leggerezza la rende degna della bici di ET.'),
       ('29','20','BTT','MT 9','img/Prodotti/Bici/bicidue.jpg','Bici da montagna, Cambio Shimano TX-55 24 ve.'),
       ('30','20','Sprint','GTS PRO','img/Prodotti/Bici/bicitre.jpg','Bici da montagna, telaio in alluminio, forcella della logan, deragliatore posteriore della Shimano, bici ottima.'),
       ('31','35','Orbita','Europa 26','img/Prodotti/Bici/biciquattro.jpg','Bici da montagna, telaio in alluminio, deragliatore posteriore della Shimano, bici ottima per tutti i percorsi, una delle migliori.'),
       ('32','20','Bikesport','HI-FLY','img/Prodotti/Bici/bicicinque.jpg','Deragliatore posteriore: Shimano Tourney, Deragliatore anteriore: Shimano, Leva del cambio: Shimano 21 vel.');

INSERT INTO Piccozze (Id_s, Prezzo, Marca, Modello, Url_immagine, Descrizione)
VALUES ('14','20','Alpin','tour 9000','img/Prodotti/Martelli/martellouno.jpg','La punta di diamante dei nostri prodotti, la migliore nel suo campo.'),
	   ('33','10','Alpin','Climbing','img/Prodotti/Martelli/martellodue.jpg','Tipo pickels: piccozza da alta montagna.'),
	   ('34','10','Salewa','Tour-X','img/Prodotti/Martelli/martellotre.jpg','Design accattivante, ottima per un omicidio in grande stile.'),
	   ('35','10','Climbing','Hound G','img/Prodotti/Martelli/martelloquattro.jpg','Design accattivante, ottima per risalire le cascate ghiacciate non presenti da noi.');

INSERT INTO Slittini (Id_s, Prezzo, Marca, Modello, Url_immagine, Descrizione)
VALUES ('36','9000','Plastkon','Schlittenbob','img/Prodotti/Bob/bobuno.jpg','Slittino adatto a bambini, in plastica temprata.'),
	   ('37','9000','Plastkon','Schlittenbob','img/Prodotti/Bob/bobdue.jpg','Slittino usato da dexter per trasportare i cadaveri dentro i sacchi neri dopo averli fatti a pezzi con la piccozza.'),
	   ('38','5000','Alpen','Gaudi-Double-Race','img/Prodotti/Bob/bobtre.jpg','Modello creato da Marchionne in persona, segue lo stile della rossa 2019, raggiunge picchi di 300 orari questo lo rendo adatto ai bambini'),
	   ('39','1','Chil','Snowrage','img/Prodotti/Bob/bobquattro.jpg','Slittino adatto ai neonati, dotato di cintura di sucurezza e airbag.');

INSERT INTO Commento (Id_commento,Testo)
VALUES ('1','Questi sci della Atomic sono il massimo, sono come la redbull ti mettono le ali e ti portano dal grande padre'),
	   ('2','Mia madre li ha venduti il giorno stesso perche erano troppo veloci per me'),
	   ('3','Si sono rotti quando gli ho tirati in testa a mio cugino, sono deluso');

INSERT INTO Commento_ins (Id_com, Id_ogg, Id_ut)
VALUES ('1','2','1'),
	   ('2','2','2'),
	   ('3','3','1');