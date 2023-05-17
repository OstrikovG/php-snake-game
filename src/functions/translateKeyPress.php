<?php

declare(strict_types=1);

namespace OstrikovG\PhpSnakeGame\Functions;

if (!\function_exists('translateKeypress')) {
    function translateKeypress($string) {
        switch ($string) {
            case "\033[A":
                return "UP";
            case "\033[B":
                return "DOWN";
            case "\033[C":
                return "RIGHT";
            case "\033[D":
                return "LEFT";
            case "\n":
                return "ENTER";
            case " ":
                return "SPACE";
            case "\010":
            case "\177":
                return "BACKSPACE";
            case "\t":
                return "TAB";
            case "\e":
                return "ESC";
        }
        return $string;
    }
}