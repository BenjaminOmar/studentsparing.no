DROP TABLE IF EXISTS studielån;
DROP TABLE IF EXISTS inntekt;
DROP TABLE IF EXISTS bruker;

CREATE TABLE bruker (
    brukernavn varchar(40) NOT NULL UNIQUE,
    passord varchar(60),
    Fornavn varchar(40),
    Etternavn varchar(40),
    PRIMARY KEY(brukernavn)
    );

CREATE TABLE inntekt (
    År SMALLINT NOT NULL,
    Måned varchar(40) NOT NULL,
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
    PRIMARY KEY(År,Måned, brukernavn),
    FOREIGN KEY(brukernavn) REFERENCES bruker(brukernavn)
    );
    
CREATE TABLE studielån (
    År SMALLINT,
    Måned varchar(40),
    brukernavn varchar(40),
    Lån integer,
    Stipend integer,
    PRIMARY KEY (År, Måned, brukernavn),
    FOREIGN KEY(År, Måned) REFERENCES inntekt(År, Måned),
    FOREIGN KEY(brukernavn) REFERENCES bruker(brukernavn)
    );

---------------------------------------
