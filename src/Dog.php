<?php

namespace ggwc82\ChapterTwo;

class Dog extends Mammal
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
}