<?php

require_once('./vendor/autoload.php');

$oscar = new \ggwc82\ChapterTwo\Dog();

for ($talk = 1; $talk <= 10; $talk++) {
    echo $oscar->talk() . " " . $oscar->getTalkCount() . PHP_EOL;
}
