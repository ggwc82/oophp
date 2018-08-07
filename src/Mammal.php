<?php

namespace ggwc82\ChapterTwo;

abstract class Mammal
{
    private static $legCount = 4;

    public static function legCount(): int
    {
        return self::$legCount;
    }

    public abstract function talk(): string;

    public function feed(Food $food): string
    {
        return "Eaten: " . $food->getFood();
    }
}