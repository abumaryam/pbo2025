<?php

namespace App\Akademik;

use App\Akademik\Pegawai;

/**
 * Class TenagaKependidikan
 *
 * Kelas ini merepresentasikan tenaga kependidikan dalam sistem akademik.
 *
 * @package App\Model\Akademik
 * @author Dian Prawira <wiradian84@gmail.com>
 */
class TenagaKependidikan extends Pegawai
{
    /**
     * Gaji pokok tenaga kependidikan
     *
     * @var int
     */
    public int $gaji_pokok;

    /**
     * Konstruktor untuk membuat objek TenagaKependidikan baru
     *
     * @param int $nip Nomor Induk Pegawai
     * @param string $nama Nama lengkap tenaga kependidikan
     * @param int $no_hp Nomor handphone tenaga kependidikan
     * @param string $alamat Alamat lengkap tenaga kependidikan
     * @param int $gaji_pokok Gaji pokok tenaga kependidikan
     */
    public function __construct(int $nip, string $nama, int $no_hp, string $alamat, int $gaji_pokok)
    {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->gaji_pokok = $gaji_pokok;
    }

    /**
     * Menampilkan pesan bahwa tenaga kependidikan sedang cuti
     *
     * @return void
     */
    public function cuti(): void
    {
        echo $this->nama . " sedang cuti";
    }
}
