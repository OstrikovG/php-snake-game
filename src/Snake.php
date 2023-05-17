<?php

declare(strict_types=1);

namespace OstrikovG\PhpSnakeGame;

class Snake
{
    public $width = 0;
    public $height = 0;

    public $positionX = 0;
    public $positionY = 0;

    public $appleX = 15;
    public $appleY = 15;

    public $movementX = 0;
    public $movementY = 0;

    public $trail = [];
    public $tail = 5;

    public $speed = 100000;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;

        $this->positionX = \rand(0, $width - 1);
        $this->positionY = \rand(0, $height - 1);

        $appleX = \rand(0, $width - 1);
        $appleY = \rand(0, $height - 1);

        while (\array_search([$appleX, $appleY], $this->trail) !== FALSE) {
            $appleX = \rand(0, $width - 1);
            $appleY = \rand(0, $height - 1);
        }
        $this->appleX = $appleX;
        $this->appleY = $appleY;
    }
}