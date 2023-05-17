<?php

declare(strict_types=1);

namespace OstrikovG\PhpSnakeGame;

class Snake
{
    public int $width = 0;
    public int $height = 0;

    public int $positionX = 0;
    public int $positionY = 0;

    public int $appleX = 15;
    public int $appleY = 15;

    public int $movementX = 0;
    public int $movementY = 0;

    public array $trail = [];
    public int $tail = 5;

    public int $speed = 100000;

    public function __construct(int $width, int $height) {
        $this->width = $width;
        $this->height = $height;

        $this->positionX = \rand(0, $width - 1);
        $this->positionY = \rand(0, $height - 1);

        $appleX = \rand(0, $width - 1);
        $appleY = \rand(0, $height - 1);

        while (\in_array([$appleX, $appleY], $this->trail)) {
            $appleX = \rand(0, $width - 1);
            $appleY = \rand(0, $height - 1);
        }
        $this->appleX = $appleX;
        $this->appleY = $appleY;
    }
}