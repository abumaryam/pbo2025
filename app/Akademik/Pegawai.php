<?php

namespace App\Akademik;

/**
 * Class Pegawai
 *
 * Kelas ini merepresentasikan seorang pegawai dalam sistem akademik.
 *
 * @package App\Akademik
 * @author Dian Prawira <wiradian84@gmail.com>
 */
class Pegawai
{
    /**
     * Nomor Induk Pegawai (NIP)
     *
     * @var int
     */
    public int $nip;

    /**
     * Nama lengkap pegawai
     *
     * @var string
     */
    public string $nama;

    /**
     * Nomor handphone pegawai
     *
     * @var string
     */
    protected string $no_hp;

    /**
     * Alamat lengkap pegawai
     *
     * @var string
     */
    public string $alamat;

    /**
     * Konstruktor untuk membuat objek Pegawai baru
     *
     * @param int $nip Nomor Induk Pegawai
     * @param string $nama Nama lengkap pegawai
     * @param string $no_hp Nomor handphone pegawai
     * @param string $alamat Alamat lengkap pegawai
     */
    public function __construct(int $nip, string $nama, string $no_hp, string $alamat)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
    }

    /**
     * Melakukan proses cek in pegawai
     *
     * @return bool Mengembalikan true jika cek in berhasil
     */
    public function cekIn(): bool
    {
        echo $this->nama . " berhasil cek in.<br>";
        return true;
    }

    /**
     * Melakukan proses cek out pegawai
     *
     * @return bool Mengembalikan true jika cek out berhasil
     */
    public function cekOut(): bool
    {
        echo $this->nama . " berhasil cek out.<br>";
        return true;
    }

    /**
     * Mendapatkan nomor handphone pegawai
     *
     * @return string Nomor handphone pegawai
     */
    protected function getNoHp(): string
    {
        return $this->no_hp;
    }

    /**
     * Mengatur nomor handphone pegawai
     *
     * @param string $no_hp Nomor handphone baru
     */
    public function setNoHp(string $no_hp): void
    {
        $this->no_hp = $no_hp;
    }
}
