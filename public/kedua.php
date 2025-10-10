<?php

function luasLingkaran($jari): float
{
    $luas = 3.14 * $jari * $jari;
    return $luas;
}

function kelilingLingkaran($jari): float
{
    $keliling = 2 * 3.14 * $jari;
    return $keliling;
}

function volumeBola($jari): float
{
    $volume = (4 / 3) * 3.14 * $jari * $jari * $jari;
    return $volume;
}

function volumeTabung($jari, $tinggi): float
{
    $volume = 3.14 * $jari * $jari * $tinggi;
    return $volume;
}

function volumeKerucut($jari, $tinggi): float
{
    $volume = (1 / 3) * 3.14 * $jari * $jari * $tinggi;
    return $volume;
}

$luas_tanah = luasLingkaran(45);
echo "Luas tanah budi adalah {$luas_tanah}\n";

$jari_jari = 10;
$tinggi = 20;

$luas_lingkaran_hasil = luasLingkaran($jari_jari);
$keliling_lingkaran_hasil = kelilingLingkaran($jari_jari);
$volume_bola_hasil = volumeBola($jari_jari);
$volume_tabung_hasil = volumeTabung($jari_jari, $tinggi);
$volume_kerucut_hasil = volumeKerucut($jari_jari, $tinggi);


echo "=== Hasil Perhitungan Geometri ===\n";
echo "Nilai Input:\n";
echo "Jari-jari         : {$jari_jari}\n";
echo "Tinggi            : {$tinggi}\n";
echo "-------------------------------\n";
echo "Hasil:\n";
echo "Luas Lingkaran    : {$luas_lingkaran_hasil}\n";
echo "Keliling Lingkaran: {$keliling_lingkaran_hasil}\n";
echo "Volume Bola       : {$volume_bola_hasil}\n";
echo "Volume Tabung     : {$volume_tabung_hasil}\n";
echo "Volume Kerucut    : {$volume_kerucut_hasil}\n";
