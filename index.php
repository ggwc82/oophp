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

$bob = new \ggwc82\ChapterTwo\Person("Bob");
echo $bob . PHP_EOL;

$regions = [
    new \ggwc82\ChapterTwo\City('London'),
    new \ggwc82\ChapterTwo\Town('Rugby'),
    new \ggwc82\ChapterTwo\Village('Dunchurch'),
    new \ggwc82\ChapterTwo\City('San Francisco'),
    new \ggwc82\ChapterTwo\Town('Lutterworth')
];

foreach ($regions as $region) {
    echo $region->getInfo() . "\n";
}