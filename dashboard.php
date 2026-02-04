<?php
include 'header.php';
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$my_requests = array_filter($_SESSION['requests'] ?? [], function($r) use ($user_id) {
    return $r['user_id'] == $user_id;
});
?>

<div class="dashboard-layout">
    <div class="sidebar">
        <ul class="sidebar-menu">
            <li><a href="dashboard.php" class="active-link"><i class="fas fa-list"></i> My Requests</a></li>
            <li><a href="make_request.php"><i class="fas fa-plus-circle"></i> New Request</a></li>
            <li><a href="profile.php"><i class="fas fa-user"></i> My Profile</a></li>
            <li><a href="contact_admin.php"><i class="fas fa-envelope"></i> Contact Admin</a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
            <h2>My Dashboard</h2>
            <a href="make_request.php" class="btn btn-primary"><i class="fas fa-plus"></i> New Request</a>
        </div>

        <?php if(isset($_GET['msg'])): ?>
            <div style="background: #d4edda; color: #155724; padding: 1rem; border-radius: 8px; margin-bottom: 1rem;">
                <?= htmlspecialchars($_GET['msg']) ?>
            </div>
        <?php endif; ?>

        <?php if(empty($my_requests)): ?>
            <div class="card">
                <h3>No requests yet</h3>
                <p>You haven't placed any laundry requests yet.</p>
                <br>
                <a href="make_request.php" class="btn btn-outline">Make your first request</a>
            </div>
        <?php else: ?>
            <div class="card" style="text-align: left; overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="border-bottom: 1px solid #eee;">
                            <th style="padding: 1rem;">ID</th>
                            <th style="padding: 1rem;">Service</th>
                            <th style="padding: 1rem;">Date</th>
                            <th style="padding: 1rem;">Status</th>
                            <th style="padding: 1rem;">Payment</th>
                            <th style="padding: 1rem;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($my_requests as $req): ?>
                        <tr style="border-bottom: 1px solid #f9f9f9;">
                            <td style="padding: 1rem;">#<?= $req['id'] ?></td>
                            <td style="padding: 1rem;"><?= $req['service_type'] ?></td>
                            <td style="padding: 1rem;"><?= $req['date'] ?></td>
                            <td style="padding: 1rem;">
                                <span class="status-badge status-<?= strtolower($req['status']) ?>">
                                    <?= $req['status'] ?>
                                </span>
                            </td>
                            <td style="padding: 1rem;"><?= $req['payment_status'] ?></td>
                            <td style="padding: 1rem;">
                                <a href="payment.php?req_id=<?= $req['id'] ?>" style="color: var(--primary);"><i class="fas fa-eye"></i> View</a>
                                <?php if($req['status'] == 'Pending'): ?>
                                    <a href="#" style="color: #dc3545; margin-left: 0.5rem;"><i class="fas fa-trash"></i></a>
                                <?php endif; ?>
                                <?php if($req['payment_status'] == 'Unpaid'): ?>
                                    <a href="payment.php?req_id=<?= $req['id'] ?>" class="btn btn-primary" style="padding: 0.2rem 0.5rem; font-size: 0.8rem; margin-left: 0.5rem;">Pay Now</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
