<?php

declare(strict_types=1);

namespace OstrikovG\PhpSnakeGame\Functions;

use OstrikovG\PhpSnakeGame\Snake;

if (!\function_exists('gameOver')) {
    function gameOver(Snake $snake): void
    {
        if ($snake->tail > 5) {
            // If the trail is greater than 5 then check for end condition.
            for ($i = 1; $i < \count($snake->trail); $i++) {
                if ($snake->trail[$i][0] == $snake->positionX && $snake->trail[$i][1] == $snake->positionY) {
                    die('dead :(');
                }
            }
        }
    }
}