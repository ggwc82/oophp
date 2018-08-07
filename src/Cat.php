<?php

namespace ggwc82\ChapterTwo;

class Cat implements Mammal
{
    private static $legCount = 4;

    public function talk(): string
    {
        return "Meow.";
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