<?php
include 'header.php';
if(isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<div class="hero" style="height: 40vh;">
    <div class="hero-content">
        <h1>Join WashApp</h1>
    </div>
</div>

<div class="form-container" style="margin-top: -5rem; position: relative; z-index: 10;">
    <h2 style="text-align: center; margin-bottom: 2rem; color: var(--secondary);">Create New Account</h2>
    
    <form action="actions.php" method="POST">
        <input type="hidden" name="action" value="register">
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="name" class="form-control" placeholder="John Doe" required>
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="tel" name="phone" class="form-control" placeholder="+94 77 123 4567" required>
        </div>
        <div class="form-group">
            <label>Email Address</label>
            <input type="email" name="email" class="form-control" placeholder="john@example.com" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Create a password" required>
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm password" required>
        </div>
        
        <div class="form-group">
             <label style="font-weight: normal; font-size: 0.9rem;">
                <input type="checkbox" required> I agree to the <a href="#" style="color: var(--primary);">Privacy Notice</a> and <a href="#" style="color: var(--primary);">Terms</a>.
            </label>
        </div>

        <button type="submit" class="btn btn-primary" style="width: 100%;">Create Account</button>
    </form>
    
    <p style="text-align: center; margin-top: 1rem;">
        Already have an account? <a href="login.php" style="color: var(--primary);">Login</a>
    </p>
</div>

</body>
</html>
