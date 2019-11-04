<?php

namespace App;

require __DIR__.'/vendor/autoload.php';

use RPS\Game;

$game = new Game(true, 10);

# Each invocation of the `play` method will play and track a new round of player (given move) vs. computer
Debug::dump($game->play('rock')); 