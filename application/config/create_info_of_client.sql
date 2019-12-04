CREATE TABLE info_of_client(
    id INT PRIMARY KEY NOT NULL,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    locale TINYINT(1) NOT NULL,
    gender TINYINT(2) NOT NULL,
    media1 VARCHAR(3) NOT NULL,
    media2 VARCHAR(3),
    opinion VARCHAR(255),
    image_path VARCHAR(255)
);