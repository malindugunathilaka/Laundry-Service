<?php
include 'header.php';
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<div class="dashboard-layout">
    <div class="sidebar">
        <ul class="sidebar-menu">
            <li><a href="dashboard.php"><i class="fas fa-list"></i> My Requests</a></li>
            <li><a href="make_request.php"><i class="fas fa-plus-circle"></i> New Request</a></li>
            <li><a href="profile.php"><i class="fas fa-user"></i> My Profile</a></li>
            <li><a href="contact_admin.php" class="active-link"><i class="fas fa-envelope"></i> Contact Admin</a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <h2>Contact Support</h2>
        <div class="card" style="text-align: left; max-width: 800px; margin-top: 1rem;">
            <p style="margin-bottom: 2rem;">Have an issue? Send us a mail or give us a call.</p>
            
            <div class="card-grid" style="gap: 1rem; margin-bottom: 2rem;">
                <div style="background: #f8f9fa; padding: 1rem; border-radius: 8px; text-align: center;">
                    <i class="fas fa-phone" style="font-size: 2rem; color: var(--primary); margin-bottom: 0.5rem;"></i>
                    <h4>Call Us</h4>
                    <p>+94 11 234 5678</p>
                    <a href="tel:+94112345678" class="btn btn-primary" style="font-size: 0.8rem; margin-top: 0.5rem;">Call Now</a>
                </div>
                <div style="background: #f8f9fa; padding: 1rem; border-radius: 8px; text-align: center;">
                    <i class="fas fa-envelope" style="font-size: 2rem; color: var(--primary); margin-bottom: 0.5rem;"></i>
                    <h4>Email Us</h4>
                    <p>support@washapp.lk</p>
                    <a href="mailto:support@washapp.lk" class="btn btn-outline" style="font-size: 0.8rem; margin-top: 0.5rem;">Send Mail</a>
                </div>
            </div>

            <hr style="border: 0; border-top: 1px solid #eee; margin: 2rem 0;">

            <h3>Send a Message</h3>
            <form>
                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" class="form-control" placeholder="Issue with Order #REQ...">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" rows="4"></textarea>
                </div>
                <button type="button" class="btn btn-primary" onclick="alert('Message sent to admin!')">Send Message</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
