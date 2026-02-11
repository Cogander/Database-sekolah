CREATE DATABASE sekolah_pro;
USE sekolah_pro;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    password VARCHAR(255)
);

INSERT INTO users (username, password)
VALUES ('admin', MD5('k@mb0j@PLG351'));

CREATE TABLE siswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    kelas VARCHAR(50),
    jenis_kelamin VARCHAR(20)
);

-- contoh isi awal
INSERT INTO siswa (nama, kelas, jenis_kelamin)
VALUES 
('Ahmad', 'X IPA 1', 'Laki-laki'),
('Maria', 'XI IPS 2', 'Perempuan');
