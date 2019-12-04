CREATE TABLE demo.locale
(
    localeId INT NOT NULL PRIMARY KEY, -- primary key column
    place VARCHAR(4) not null
);



INSERT INTO locale(localeId, place)
-- 用意しておくデータ。
VALUES(1, 'WEST');
INSERT INTO locale(localeId, place)
VALUES(2, 'EAST');