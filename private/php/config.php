<?php

// Database connection part
$db_conn = new mysqli('host', 'username', 'password', 'database');

// Google Recaptcha config
$conf = [
    'recaptcha' => [
        'public' => '',
        'private' => ''
    ]
];

// Use environmental variables for handling this.
