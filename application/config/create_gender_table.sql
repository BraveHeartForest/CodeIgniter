CREATE TABLE demo.gender(
    genderId INT NOT NULL PRIMARY KEY,
    -- primary key column
    genderName VARCHAR(6) NOT NULL
    -- specify more columns here
);

INSERT
    demo.gender(genderId, genderName) VALUES(1, 'male');
INSERT
    demo.gender(genderId, genderName) VALUES(2, 'female');