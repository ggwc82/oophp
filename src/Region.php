<?php

namespace ggwc82\ChapterTwo;

interface Region
{
    public function __construct(string $name);

    public function getInfo(): string;
}
