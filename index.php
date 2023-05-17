<?php

declare(strict_types=1);

use OstrikovG\PhpSnakeGame\Snake;
use function OstrikovG\PhpSnakeGame\Functions\direction;
use function OstrikovG\PhpSnakeGame\Functions\gameOver;
use function OstrikovG\PhpSnakeGame\Functions\move;
use function OstrikovG\PhpSnakeGame\Functions\renderGame;

require __DIR__ . '/vendor/autoload.php';

$width = 20;
$height = 30;

$snake = new Snake($width, $height);

\system('stty cbreak -echo');
$stdin = \fopen('php://stdin', 'r');
\stream_set_blocking($stdin, false);

while (true) {
    \system('clear');
    echo 'Level: ' . $snake->tail . \PHP_EOL;
    direction($stdin, $snake);
    move($snake);
    echo renderGame($snake);
    gameOver($snake);
    \usleep($snake->speed);
}