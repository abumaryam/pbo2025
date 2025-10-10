<?php

namespace App\Shapes;

class Tabung
{
    public const PHI = 3.14;
    public float $jari_jari;

    public function __construct(float $jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    public function volume(float $tinggi): float
    {
        return self::PHI * pow($this->jari_jari, 2) * $tinggi;
    }
}
