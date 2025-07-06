<?php
// config.php

// List of subdomains
$subdomains = [];
for ($i = 1; $i <= 99; $i++) {
    $subdomains[] = "dev-$i.bersiber.space"; //dev-11.bersiber.space ganti ke dev- lain
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
