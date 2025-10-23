DROP TABLE IF EXISTS dosen;
DROP TABLE IF EXISTS tendik;
DROP TABLE IF EXISTS pegawai;

CREATE TABLE pegawai (
    nip INT PRIMARY KEY,
    nama VARCHAR(150) NOT NULL,
    no_hp VARCHAR(20) NOT NULL,
    alamat VARCHAR(255) NULL,
    tipe_pegawai ENUM('Dosen', 'Tendik') NOT NULL 
);

CREATE TABLE dosen (
    nip INT PRIMARY KEY,
    nidn VARCHAR(20) NOT NULL, 
    jumlah_sks INT NOT NULL DEFAULT 24,
    FOREIGN KEY (nip) REFERENCES pegawai(nip) ON DELETE CASCADE
);

CREATE TABLE tendik (
    nip INT PRIMARY KEY,
    gaji_pokok INT NOT NULL, 
    FOREIGN KEY (nip) REFERENCES pegawai(nip) ON DELETE CASCADE
);

