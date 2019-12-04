CREATE TABLE demo.media(
    mediaId INT NOT NULL PRIMARY KEY,
    nameOfMedia VARCHAR(4) NOT NULL
);

INSERT
    demo.media(mediaId, nameOfMedia) VALUES(1, 'WEB');
INSERT
    demo.media(mediaId, nameOfMedia) VALUES(2, 'TV');