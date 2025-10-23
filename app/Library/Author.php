<?php

namespace App\Library;

class Author
{
    public string $name;
    public string $description;

    public function show(): array
    {
        return [$this->name, $this->description, $type];
    }
}
