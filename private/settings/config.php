<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";
$conn = new mysqli($servername, $username, $password, $dbname);

// Config settings
$conf = [
    'recaptcha' => [
        'public' => '',
        'private' => ''
    ],
    'pterodactyl' => [
        'domain' => '',
        'api_key' => ''
    ],
    'discord' => [
        'auto_join_role' => '',
        'auto_join_guild_id' => '',
        'bot_token' => ''
    ]
];

// Use environmental variables for handling this.
