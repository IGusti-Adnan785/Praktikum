-- Membuat tabel extensions
CREATE TABLE extensions (
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    rating DECIMAL(3,1),
    image VARCHAR(255),
    PRIMARY KEY (id)
);

-- Membuat tabel auth
CREATE TABLE auth (
    id_pengguna TINYINT(2) NOT NULL AUTO_INCREMENT,
    email VARCHAR(32) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    level VARCHAR(45) NOT NULL,
    PRIMARY KEY (id_pengguna)
);

-- Membuat tabel artikel
CREATE TABLE artikel (
    id MEDIUMINT(5) NOT NULL AUTO_INCREMENT,
    tanggal DATE NOT NULL,
    judul VARCHAR(256) NOT NULL,
    penulis VARCHAR(128) NOT NULL,
    deskripsi TEXT NOT NULL,
    posting ENUM('tidak', 'ya') NOT NULL DEFAULT 'tidak',
    PRIMARY KEY (id)
);

INSERT INTO auth (email, password, level)
 VALUES
 ('gustiadnansanubi123@gmail.com', '$2y$10$R/NmE2u6Jl7xvqO9Gw/lauB98PNVkfZdg/90iZkMdSWovn/os4quO', 0),
 ('gustiadnan123@gmail.com', '$2y$10$RUmfSD.zClRcAWPOIrd7Feg8u4opmG/uyoJXWGMzqb7rN3tHzQO.O', 1);