<?php

declare(strict_types=1);

namespace OstrikovG\PhpSnakeGame\Functions;

if (!\function_exists('move')) {
    function move($snake) {
        // Move the snake.
        $snake->positionX += $snake->movementX;
        $snake->positionY += $snake->movementY;

        // Wrap the snake around the boundaries of the board.
        if ($snake->positionX < 0) {
            $snake->positionX = $snake->width - 1;
        }
        if ($snake->positionX > $snake->width - 1) {
            $snake->positionX = 0;
        }
        if ($snake->positionY < 0) {
            $snake->positionY = $snake->height - 1;
        }
        if ($snake->positionY > $snake->height - 1) {
            $snake->positionY = 0;
        }

        // Add to the snakes trail at the front.
        \array_unshift($snake->trail, [$snake->positionX, $snake->positionY]);

        // Remove a block from the end of the snake (but keep correct length).
        if (\count($snake->trail) > $snake->tail) {
            \array_pop($snake->trail);
        }

        if ($snake->appleX == $snake->positionX && $snake->appleY == $snake->positionY) {
            // The snake has eaten an apple.
            $snake->tail++;

            if ($snake->speed > 2000) {
                // Increase the speed of the game up to a certain limit.
                $snake->speed = $snake->speed - ($snake->tail * ($snake->width / $snake->height + 10));
            }
            // Figure out a different place for the apple.
            $appleX = \rand(0, $snake->width - 1);
            $appleY = \rand(0, $snake->height - 1);
            while (\array_search([$appleX, $appleY], $snake->trail) !== FALSE) {
                $appleX = \rand(0, $snake->width - 1);
                $appleY = \rand(0, $snake->height - 1);
            }
            $snake->appleX = $appleX;
            $snake->appleY = $appleY;
        }
    }
}