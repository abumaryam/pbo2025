<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Akademik\Dosen;
use App\Akademik\TenagaKependidikan;

$dosen1 = new Dosen(101, "Budi Hartono", "0812...", "Jl. Cendrawasih No. 10", "198012345");
$tendik1 = new TenagaKependidikan(201, "Ani Suryani", "0815...", "Jl. Merpati No. 5", 5000000);

$dosen1->bekerja();
$tendik1->bekerja();
