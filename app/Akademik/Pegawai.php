<?php

namespace App\Akademik;

class Pegawai
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

    public function cekIn(): bool
    {
        echo $this->nama . " berhasil cek in.<br>";
        return true;
    }

    public function cekOut(): bool
    {
        echo $this->nama . " berhasil cek out.<br>";
        return true;
    }

    protected function getNoHp(): string
    {
        return $this->no_hp;
    }

    public function setNoHp(string $no_hp): void
    {
        $this->no_hp = $no_hp;
    }
}
