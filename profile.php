<?php
include 'header.php';
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user = [];
foreach ($_SESSION['users'] as $u) {
    if ($u['id'] == $_SESSION['user_id']) {
        $user = $u;
        break;
    }
}
?>

<div class="dashboard-layout">
    <div class="sidebar">
        <ul class="sidebar-menu">
            <li><a href="dashboard.php"><i class="fas fa-list"></i> My Requests</a></li>
            <li><a href="make_request.php"><i class="fas fa-plus-circle"></i> New Request</a></li>
            <li><a href="profile.php" class="active-link"><i class="fas fa-user"></i> My Profile</a></li>
            <li><a href="contact_admin.php"><i class="fas fa-envelope"></i> Contact Admin</a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <h2>Edit Account</h2>
        <div class="card" style="text-align: left; max-width: 600px; margin-top: 1rem;">
            <form>
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" value="<?= htmlspecialchars($user['name']) ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" value="<?= htmlspecialchars($user['email']) ?>" readonly style="background: #eee;">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="tel" class="form-control" value="<?= htmlspecialchars($user['phone']) ?>">
                </div>
                 <div class="form-group">
                    <label>Default Address</label>
                    <textarea class="form-control"><?= htmlspecialchars($user['address']) ?></textarea>
                </div>
                
                <button type="button" class="btn btn-primary">Update Details</button>
                <button type="button" class="btn btn-outline" style="border-color: #dc3545; color: #dc3545;">Delete Account</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
