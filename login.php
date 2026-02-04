<?php
include 'header.php';
if(isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<div class="hero" style="height: 40vh;">
    <div class="hero-content">
        <h1>Welcome Back</h1>
    </div>
</div>

<div class="form-container" style="margin-top: -5rem; position: relative; z-index: 10;">
    <h2 style="text-align: center; margin-bottom: 2rem; color: var(--secondary);">Login to Account</h2>
    
    <?php if(isset($_GET['error'])): ?>
        <div style="background: #f8d7da; color: #721c24; padding: 1rem; border-radius: 8px; margin-bottom: 1rem;">
            <?= htmlspecialchars($_GET['error']) ?>
        </div>
    <?php endif; ?>

    <form action="actions.php" method="POST">
        <input type="hidden" name="action" value="login">
        <div class="form-group">
            <label>Email Address</label>
            <input type="email" name="email" class="form-control" placeholder="user@example.com" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="••••••••" required>
        </div>
        <button type="submit" class="btn btn-primary" style="width: 100%;">Login</button>
    </form>
    
    <p style="text-align: center; margin-top: 1rem;">
        Don't have an account? <a href="register.php" style="color: var(--primary);">Sign Up</a>
    </p>
    <p style="text-align: center; margin-top: 0.5rem; font-size: 0.9rem;">
        <a href="#" style="color: var(--text-light);">Forgot Password?</a>
    </p>
</div>

</body>
</html>
