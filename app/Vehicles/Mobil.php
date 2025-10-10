<?php

namespace App\Vehicles;

class Mobil
{
    public string $warna;
    public string $merk;
    public int $tahun_produksi;
    public function klakson(): void
    {
        echo "Telolet telotet";
    }
    public function getWarnaMerah(): string
    {
        return "merah";
    }
}
