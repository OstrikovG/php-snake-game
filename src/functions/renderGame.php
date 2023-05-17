<?php

declare(strict_types=1);

namespace OstrikovG\PhpSnakeGame\Functions;

if (!\function_exists('renderGame')) {
    function renderGame($snake) {
        $output = '';

        for ($i = 0; $i < $snake->width; $i++) {
            for ($j = 0; $j < $snake->height; $j++) {
                if ($snake->appleX == $i && $snake->appleY == $j) {
                    $cell = '0';
                }
                else {
                    $cell = '.';
                }
                foreach ($snake->trail as $trail) {
                    if ($trail[0] == $i && $trail[1] == $j) {
                        $cell = 'X';
                    }
                }
                $output .= $cell;
            }
            $output .= PHP_EOL;
        }

        $output .= PHP_EOL;

        return $output;
    }
}