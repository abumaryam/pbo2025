<?php

require_once '../vendor/autoload.php';

use App\Admin\HomePage;
use App\Admin\ManajemenArtikel;

$hp = new HomePage();
$hp->tampil();

$ma = new ManajemenArtikel();
$ma->tambah();
