<?php
date_default_timezone_set('Asia/Jakarta');
$nama = readline("Masukkan nama Anda: ");
$jam = (int)date('H');

if ($jam >= 5 && $jam < 11) {
    $greeting = "Selamat pagi";
} elseif ($jam >= 11 && $jam < 15) {
    $greeting = "Selamat siang";
} elseif ($jam >= 15 && $jam < 19) {
    $greeting = "Selamat sore";
} elseif ($jam >= 19) {
    $greeting = "Selamat malam";
} else {
    $greeting = "Selamat dini hari";
}

$waktu = date('H:i');

echo "$greeting, {$nama}! Sekarang pukul {$waktu}\n";
