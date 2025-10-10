<?php
include_once '../app/Shapes/Bola.php';
include_once '../app/Shapes/Kerucut.php';
include_once '../app/Shapes/Lingkaran.php';
include_once '../app/Shapes/Tabung.php';

$nasi_tumpeng = new Kerucut(4);
echo "Volume nasi tumpeng: " . $nasi_tumpeng->volume(10) . "\n";

$lingkaran = new Lingkaran(10);
echo "Luas Lingkaran: " . $lingkaran->luas() . "\n";
echo "Keliling Lingkaran: " . $lingkaran->keliling() . "\n";

$bola = new Bola(10);
echo "Volume Bola: " . $bola->volume() . "\n";

$tabung = new Tabung(10);
echo "Volume Tabung: " . $tabung->volume(20) . "\n";
