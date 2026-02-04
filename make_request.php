<?php
include 'header.php';
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user = null;
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
            <li><a href="make_request.php" class="active-link"><i class="fas fa-plus-circle"></i> New Request</a></li>
            <li><a href="profile.php"><i class="fas fa-user"></i> My Profile</a></li>
            <li><a href="contact_admin.php"><i class="fas fa-envelope"></i> Contact Admin</a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <h2>Schedule Pickup</h2>
        <div class="card" style="text-align: left; max-width: 800px; margin-top: 1rem;">
            <form action="actions.php" method="POST">
                <input type="hidden" name="action" value="create_request">
                
                <div class="form-group">
                    <label>Select Service Type</label>
                    <select name="service_type" class="form-control" required>
                        <option value="Wash & Fold">Wash & Fold</option>
                        <option value="Dry Cleaning">Dry Cleaning</option>
                        <option value="Ironing Only">Ironing Only</option>
                        <option value="Premium Care">Premium Care</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pickup Date</label>
                    <input type="date" name="pickup_date" class="form-control" required min="<?= date('Y-m-d') ?>">
                </div>

                <div class="form-group">
                    <label>Pickup Address</label>
                    <textarea name="address" class="form-control" rows="3" required><?= htmlspecialchars($user['address'] ?? '') ?></textarea>
                </div>

                <div class="form-group">
                    <label>Additional Instructions (Optional)</label>
                    <textarea name="notes" class="form-control" rows="2" placeholder="e.g. Separate whites, use softner..."></textarea>
                </div>
                
                <!-- Use Case extends: Attach additional details -->
                <div class="form-group">
                    <label>Upload Image of Clothes (Optional)</label>
                    <input type="file" class="form-control" style="background: #fff;">
                </div>

                <button type="submit" class="btn btn-primary">Submit Request</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
