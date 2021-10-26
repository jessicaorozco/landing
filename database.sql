CREATE DATABASE landing;

CREATE TABLE checkin(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR (255) UNIQUE,
    typedoc VARCHAR(2),
    numdoc VARCHAR(10)
    filedoc LONGBLOB NOT NULL,
    fileinv LONGBLOB NOT NULL,
    filefirm LONGBLOB NOT NULL

    );


