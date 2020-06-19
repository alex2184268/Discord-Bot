<?
use Discord\DiscordCommandClient;

$discord = new DiscordCommandClient([
    'token' => 'your-token',
]);

$discord->registerCommand('ping', function ($message) {
    return 'pong!';
}, [
    'description' => 'pong!',
]);

$discord->run();
