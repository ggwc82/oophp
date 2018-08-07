<?php

namespace ggwc82\ChapterTwo;

interface Mammal
{
    public function talk(): string;

    public function feed(Food $food): string;

    public static function legCount(): int;
}