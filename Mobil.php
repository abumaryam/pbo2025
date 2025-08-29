<?php
class Mobil {
    public string $warna;
    public string $merk;
    public int $tahun_produksi;


    public function klakson(string $tambahan) : void {
        echo "Telolet telotet ";
    }

    public function getWarnaMerah(): string {
        return "merah";
    }
}

$mobil_dian = new Mobil();
$mobil_dian->warna = 'hijau';

$mobil_dian->tahun_produksi = "2025";



