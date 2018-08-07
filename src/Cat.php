<?php

namespace ggwc82\ChapterTwo;

class Cat extends Mammal
{
    final public function talk(): string
    {
        return "Meow.";
    }
}