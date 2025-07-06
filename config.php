<?php
// config.php

// List of subdomains
$subdomains = [];
for ($i = 1; $i <= 99; $i++) {
    $subdomains[] = "dev-$i.bersiber.xyz"; //dev-11.bersiber.xyz ganti ke dev- lain
}

// email and password
$credentials = [
    "email" => "kira--kira@list.ru",
    "password" => ""
];

// Database simulation (array)
$users = [
    [
        'email' => 'kira--kira@list.ru',
        'password' => '',
        'name' => 'Kira'
    ],
];
?>
