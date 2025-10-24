<?php


namespace App\Akademik;


use App\Akademik\Pegawai;
use App\Akademik\PenilaianKinerja;


class Dosen extends Pegawai implements PenilaianKinerja
{
    private int $nidn;
    public int $jumlah_sks;


    public function __construct(int $nip, string $nama, string $no_hp, string $alamat, string $nidn)
    {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->nidn = $nidn;
        $this->jumlah_sks = 24;
    }


    public function bekerja(): void
    {
        echo $this->nama . " sedang mengajar dan membimbing mahasiswa.<br>";
    }


    public function hitungTunjanganKinerja(): int
    {
        return $this->jumlah_sks * 150000;
    }


    public function getNidn(): int
    {
        return $this->nidn;
    }
}
