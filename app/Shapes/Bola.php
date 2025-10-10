<?php

namespace App\Shapes;

class Bola
{
    public const PHI = 3.14;
    public float $jari_jari;

    public function __construct(float $jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    public function volume(): float
    {
        return (4 / 3) * self::PHI * pow($this->jari_jari, 3);
    }
}
