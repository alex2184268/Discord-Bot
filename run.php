<?php

include __DIR__ . '/vendor/autoload.php';

$discord = new \Discord\Discord([
    'token' => 'NzIzMzY2MDMwMjQzNTI4ODU2.Xuxtww.Gl3Pisso_uhduDgh7WImUZcOsk8',
]); //bot token

$discord->on('ready', function ($discord) {
    echo "Bot is ready.", PHP_EOL;

    // Listen for events here
    $discord->on('message', function ($message) {
        echo "Recieved a message from {$message->author->username}: {$message->content}", PHP_EOL;
    });
});

$discord->run();

