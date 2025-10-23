<?php

namespace App\Akademik;

abstract class Pegawai
{
    public int $nip;
    public string $nama;
    protected string $no_hp;
    public string $alamat;

    public function __construct(int $nip, string $nama, string $no_hp, string $alamat)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
    }

    abstract public function bekerja(): void;

    public function cekIn(): void
    {
        echo $this->nama . " berhasil cek in.<br>";
    }
}
