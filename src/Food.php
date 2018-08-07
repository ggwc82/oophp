<?php

namespace ggwc82\ChapterTwo;

class Food
{
    private $food;

    public function __construct(string $food)
    {
        $this->food = $food;
    }

    public function getFood(): string
    {
        return $this->food;
    }
}