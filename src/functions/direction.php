<?php

declare(strict_types=1);

namespace OstrikovG\PhpSnakeGame\Functions;

use OstrikovG\PhpSnakeGame\Snake;

if (!\function_exists('direction')) {
    /**
     * @param resource $stdin
     */
    function direction($stdin, Snake $snake): void
    {
        // Listen to the button being pressed.
        $key = \fgets($stdin);
        if ($key) {
            $key = translateKeypress($key);
            switch ($key) {
                case "UP":
                    $snake->movementX = -1;
                    $snake->movementY = 0;
                    break;
                case "DOWN":
                    $snake->movementX = 1;
                    $snake->movementY = 0;
                    break;
                case "RIGHT":
                    $snake->movementX = 0;
                    $snake->movementY = 1;
                    break;
                case "LEFT":
                    $snake->movementX = 0;
                    $snake->movementY = -1;
                    break;
            }
        }
    }
}