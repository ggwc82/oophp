<?php

namespace ggwc82\ChapterTwo;

class Person
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return "Hello! My name is " . $this->name . ".";
    }
}