CREATE DATABASE Caisse2;
use Caisse2;

CREATE TABLE Produit(
    idProduit int(3) primary key not null auto_increment,
    code varchar(5) not null,
    designation varchar(50) not null,
    prix int(20) not null,
    quantiteStock int(20),
    remise int(2)
);

CREATE TABLE Caisse(
    idCaisse int(3) primary key not null auto_increment,
    nomCaisse varchar(10)
);

CREATE TABLE Achat(
    idAchat int(5) primary key not null auto_increment,
    idCaisse int(3) not null references Caisse(idCaisse),
    idProduit int(3) not null references Produit(idProduit),
    quantite int(3) not null
);

CREATE TABLE Facture(
    idFacture int(5) primary key not null auto_increment,
    idAchat int(5) not null references Achat(idAchat),
    montantTotal int(5)
);

INSERT INTO Produit VALUES 
(null,"001","Crayon",500,200,0),
(null,"002","Stylo",200,100,0),
(null,"003","Regle",1000,100,0),
(null,"004","Menaka",6000,200,0),
(null,"005","Eau Vive",2800,100,0);

INSERT INTO Caisse VALUES
(null,"Caisse 1"),
(null,"Caisse 2");
