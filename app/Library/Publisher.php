<?php

namespace App\Library;

class Publisher
{
    public string $name;
    public string $address;
    private string $phone;

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getPhone(): int
    {
        return $this->phone;
    }
}
