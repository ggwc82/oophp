<?php

namespace ggwc82\ChapterTwo;

class Town implements Region
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getInfo(): string
    {
        return $this->name . " is a town.";
    }
}