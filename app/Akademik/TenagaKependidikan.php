<?php

namespace App\Akademik;

use App\Akademik\Pegawai;

class TenagaKependidikan extends Pegawai implements PenilaianKinerja
{
    public int $gaji_pokok;

    public function __construct(int $nip, string $nama, string $no_hp, string $alamat, int $gaji_pokok)
    {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->gaji_pokok = $gaji_pokok;
    }

    public function bekerja(): void
    {
        echo $this->nama . " sedang mengurus administrasi akademik.<br>";
    }

    public function hitungTunjanganKinerja(): int
    {
        return $this->gaji_pokok * 0.2;
    }

    public function cuti(): void
    {
        echo $this->nama . " sedang mengambil cuti.<br>";
    }
}
