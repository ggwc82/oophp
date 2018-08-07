<?php

namespace ggwc82\ChapterTwo;

abstract class Mammal
{
    private static $legCount = 4;

    public abstract function talk(): string;

    public function feed(Food $food): string
    {
        return "Eaten: " . $food->getFood();
    }

    public static function legCount(): int
    {
        return self::$legCount;
    }
}