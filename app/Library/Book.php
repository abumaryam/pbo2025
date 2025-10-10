<?php

namespace App\Library;

class Book
{
    public int $ISBN;
    public string $title;
    public string $description;
    public string $category;
    public string $language;
    public int $numberOfPages;
    public string $author;
    public string $publisher;

    public function showAll(): array
    {
        return [
            $this->ISBN,
            $this->title,
            $this->description,
            $this->category,
            $this->language,
            $this->numberOfPages,
            $this->author,
            $this->publisher
        ];
    }

    public function detail($ISBN): array
    {
        return [
            $this->title,
            $this->author,
            $this->publisher,
            $ISBN
        ];
    }
}
