<?php

declare(strict_types=1);

namespace OstrikovG\PhpSnakeGame\Functions;

use OstrikovG\PhpSnakeGame\Snake;

if (!\function_exists('renderGame')) {
    function renderGame(Snake $snake): string
    {
        $output = '';

        for ($i = 0; $i < $snake->width; $i++) {
            for ($j = 0; $j < $snake->height; $j++) {
                if ($snake->appleX == $i && $snake->appleY == $j) {
                    $cell = "\033[32m\u{02593}\033[0m";
                }
                else {
                    $cell = "\u{02591}";
                }
                foreach ($snake->trail as $trail) {
                    if ($trail[0] == $i && $trail[1] == $j) {
                        $cell = "\u{02593}";
                    }
                }
                $output .= $cell;
            }
            $output .= \PHP_EOL;
        }

        $output .= \PHP_EOL;

        return $output;
    }
}