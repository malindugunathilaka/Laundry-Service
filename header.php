<?php
session_start();
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WashApp - Premium Laundry Service</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<header>
    <div class="logo">
        <i class="fas fa-soap"></i> WashApp
    </div>
    
    <nav>
        <ul class="nav-links">
            <li><a href="index.php" class="<?= $current_page == 'index.php' ? 'active' : '' ?>">Home</a></li>
            <li><a href="index.php#services">Services</a></li>
            <li><a href="index.php#pricing">Pricing</a></li>
            <?php if(isset($_SESSION['user_id'])): ?>
                <li><a href="dashboard.php" class="<?= $current_page == 'dashboard.php' ? 'active' : '' ?>">Dashboard</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    <div class="auth-buttons">
        <?php if(isset($_SESSION['user_id'])): ?>
            <a href="logout.php" class="btn btn-outline">Logout</a>
            <a href="dashboard.php" class="btn btn-primary">My Account</a>
        <?php else: ?>
            <a href="login.php" class="btn btn-outline">Login</a>
            <a href="register.php" class="btn btn-primary">Sign Up</a>
        <?php endif; ?>
    </div>
</header>
