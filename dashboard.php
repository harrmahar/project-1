<?php
// dashboard.php
session_start();
include 'config.php';

if (!isset($_SESSION['user_email'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <p>Welcome to your dashboard, <?php echo htmlspecialchars($_SESSION['user_email']); ?>!</p>
    <h2>Your Subdomains</h2>
    <ul>
        <?php foreach ($subdomains as $subdomain): ?>
            <li><?php echo $subdomain; ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="logout.php">Logout</a>
</body>
</html>
