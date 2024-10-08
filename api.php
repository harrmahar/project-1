<?php
// api.php
include 'config.php';

header('Content-Type: application/json');

$response = [
    "subdomains" => $subdomains,
    "credentials" => $credentials
];

echo json_encode($response);
?>
