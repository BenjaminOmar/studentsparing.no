DROP TABLE IF EXISTS inntekt;

CREATE TABLE inntekt (
    år integer NOT NULL,
    måned varchar(45) NOT NULL,
    nettoinntekt integer,
    husleie integer,
    klær integer,
    frisør integer,
    buss integer,
    sparing integer,
    mat integer,
    fylla integer,
    tilOvers integer,
    PRIMARY KEY (år, måned)
);

---------------------------------------
