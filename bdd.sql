drop database if exists projet1;
create database projet1;
	use projet1;


CREATE TABLE Marque(
        id_Marque  Int  Auto_increment  NOT NULL ,
        nom_Marque Varchar (50) NOT NULL
	,CONSTRAINT Marque_PK PRIMARY KEY (id_Marque)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Sneakers
#------------------------------------------------------------

CREATE TABLE Sneakers(
        id_Sneaker  Int  Auto_increment  NOT NULL ,
        nom_Sneaker Varchar (50) NOT NULL ,
        taille      Int NOT NULL ,
        prix        Float NOT NULL ,
        modele      Varchar (50) NOT NULL ,
        id_Marque   Int
	,CONSTRAINT Sneakers_PK PRIMARY KEY (id_Sneaker)

	,CONSTRAINT Sneakers_Marque_FK FOREIGN KEY (id_Marque) REFERENCES Marque(id_Marque)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Client
#------------------------------------------------------------

CREATE TABLE Client(
        id_client      Int  Auto_increment  NOT NULL ,
        nom_client     Varchar (50) NOT NULL ,
        prenom_client  Varchar (50) NOT NULL ,
        adresse_client Varchar (50) NOT NULL ,
        ville          Varchar (50) NOT NULL ,
        login          Varchar (50) NOT NULL ,
        password       Varchar (50) NOT NULL
	,CONSTRAINT Client_PK PRIMARY KEY (id_client)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Acheter
#------------------------------------------------------------

CREATE TABLE Acheter(
        id_client  Int NOT NULL ,
        id_Sneaker Int NOT NULL ,
        Date_achat Varchar (50) NOT NULL
	,CONSTRAINT Acheter_PK PRIMARY KEY (id_client,id_Sneaker)

	,CONSTRAINT Acheter_Client_FK FOREIGN KEY (id_client) REFERENCES Client(id_client)
	,CONSTRAINT Acheter_Sneakers0_FK FOREIGN KEY (id_Sneaker) REFERENCES Sneakers(id_Sneaker)
)ENGINE=InnoDB;



#insertion dans une table 

insert into nomTable values();

Insert into Marque values(null,"Nike");

Insert into Client values(null,"b","b","h","t","r","n");


#selection dans une table

select * from Marque;

select nom_client from client;



Insert into Marque values(null,"Nike"),(null,"Puma"),(null,"Jordan");

# modifier
update Marque set nom_Marque="Adidas";
update Marque set nom_Marque="Vans" where id_Marque=1;

#supprimer
delete from Marque where id_Marque=3;


insert into Sneakers values(null,"airMax","44",95.0,"jhb",2);

select s.nom_Sneaker,s.prix,m.nom_Marque,s.url,s.prix,s.modele
from Sneakers s, Marque m
where s.id_Marque = m.id_Marque ;


#supprimer un champ
Alter table client drop ville;

#ajouter 
Alter table client add ville varchar(50);

#Modifier
Alter table client modify ville varchar(50) not null;

