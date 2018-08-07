<?php

require_once('./vendor/autoload.php');

$oscar = new \ggwc82\ChapterTwo\Dog();

for ($talk = 1; $talk <= 10; $talk++) {
    echo $oscar->talk() . " " . $oscar->getTalkCount() . PHP_EOL;
}

$dogFood = new \ggwc82\ChapterTwo\Food("Dog Food");
echo $oscar->feed($dogFood) . PHP_EOL;

echo "Dogs have " . \ggwc82\ChapterTwo\Dog::legCount() . " legs. " . PHP_EOL;

$whiskers = new \ggwc82\ChapterTwo\Cat();
echo $whiskers->talk() . PHP_EOL;

$felix = new \ggwc82\ChapterTwo\AegeanCat();
echo $felix->talk() . PHP_EOL;