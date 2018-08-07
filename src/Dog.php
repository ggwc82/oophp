<?php

namespace ggwc82\ChapterTwo;

class Dog
{
    private $talkcount = 0;

    public function talk(): string
    {
        $this->talkcount++;
        return "Woof!";
    }

    public function getTalkCount(): int
    {
        return $this->talkcount;
    }

    public function feed(Food $food): string
    {
        return "Eaten: " . $food->getFood();
    }
}