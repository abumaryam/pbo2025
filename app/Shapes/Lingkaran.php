<?php

namespace App\Shapes;

class Lingkaran
{
    public const PHI = 3.14;
    public float $jari_jari;

    public function __construct(float $jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    public function luas(): float
    {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling(): float
    {
        return 2 * self::PHI * $this->jari_jari;
    }
}
