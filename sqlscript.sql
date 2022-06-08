DROP TABLE IF EXISTS studielån;
DROP TABLE IF EXISTS inntekt;
DROP TABLE IF EXISTS måned;
DROP TABLE IF EXISTS bruker;


CREATE TABLE bruker (
    brukernavn varchar(40) NOT NULL UNIQUE,
    passord varchar(60),
    PRIMARY KEY(brukernavn)
    );
    
CREATE TABLE måned (
    Mnr integer NOT NULL,
    Mnavn varchar(30),
    PRIMARY KEY(Mnr)
    );

CREATE TABLE inntekt (
    År SMALLINT NOT NULL,
    Mnr integer NOT NULL,
    brukernavn varchar(40),
    Nettoinntekt integer,
    Husleie integer,
    Klær integer,
    Frisør integer,
    Buss integer,
    Sparing integer,
    Mat integer,
    Fylla integer,
    TilOvers integer,
    PRIMARY KEY(År,Mnr, brukernavn),
    FOREIGN KEY(brukernavn) REFERENCES bruker(brukernavn),
    FOREIGN KEY(Mnr) REFERENCES måned(Mnr)
    );
        
CREATE TABLE studielån (
    År SMALLINT,
    Mnr integer,
    brukernavn varchar(40),
    Lån integer,
    Stipend integer,
    PRIMARY KEY (År, Mnr, brukernavn),
    FOREIGN KEY(År, Mnr) REFERENCES inntekt(År, Mnr),
    FOREIGN KEY(brukernavn) REFERENCES bruker(brukernavn)
    );


INSERT INTO `måned` (`Mnr`, `Mnavn`) 
VALUES ('1', 'Januar'), ('2', 'Februar'), ('3', 'Mars'), 
('4', 'April'), ('5', 'Mai'), ('6', 'Juni'), ('7', 'Juli'), 
('8', 'August'), ('9', 'September'), ('10', 'Oktober'), 
('11', 'November'), ('12', 'Desember');