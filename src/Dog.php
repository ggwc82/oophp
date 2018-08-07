<?php

namespace ggwc82\ChapterTwo;

class Dog
{
    private $talkcount = 0;
    private static $legCount = 4;

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

    public static function legCount(): int
    {
        return self::$legCount;
    }
}