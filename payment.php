<?php
include 'header.php';
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
// For demo, just pick the last request or a specific one
// In reality, we'd pass ?req_id=...
$req_id = $_GET['req_id'] ?? 'REQ123';
?>

<div class="dashboard-layout">
    <div class="sidebar">
        <ul class="sidebar-menu">
            <li><a href="dashboard.php"><i class="fas fa-list"></i> My Requests</a></li>
            <li><a href="make_request.php"><i class="fas fa-plus-circle"></i> New Request</a></li>
            <li><a href="profile.php"><i class="fas fa-user"></i> My Profile</a></li>
            <li><a href="contact_admin.php"><i class="fas fa-envelope"></i> Contact Admin</a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <h2>Secure Checkout</h2>
        <div class="card-grid" style="grid-template-columns: 2fr 1fr; align-items: start;">
            
            <div class="card" style="text-align: left;">
                <h3 style="margin-bottom: 1.5rem;">Select Payment Method</h3>
                
                <form id="payment-form">
                    <div style="margin-bottom: 1rem;">
                        <input type="radio" id="card" name="method" checked>
                        <label for="card" style="font-weight: 600; margin-left: 0.5rem;"><i class="fas fa-credit-card"></i> Credit/Debit Card</label>
                        <div style="margin-top: 1rem; padding-left: 1.5rem;">
                            <input type="text" class="form-control" placeholder="Card Number" style="margin-bottom: 0.5rem;">
                            <div style="display: flex; gap: 1rem;">
                                <input type="text" class="form-control" placeholder="MM/YY">
                                <input type="text" class="form-control" placeholder="CVC">
                            </div>
                        </div>
                    </div>
                    
                    <hr style="margin: 1.5rem 0; border-top: 1px solid #eee;">
                    
                    <div style="margin-bottom: 1rem;">
                        <input type="radio" id="bank" name="method">
                        <label for="bank" style="font-weight: 600; margin-left: 0.5rem;"><i class="fas fa-university"></i> Bank Transfer</label>
                        <div style="margin-top: 1rem; padding-left: 1.5rem; font-size: 0.9rem; color: #666;">
                            <p>Transfer to: WashApp Pvt Ltd</p>
                            <p>Bank: Commercial Bank</p>
                            <p>Acc: 1234567890</p>
                            <label style="margin-top: 0.5rem; display: block;">Upload Receipt:</label>
                            <input type="file" class="form-control">
                        </div>
                    </div>
                </form>
            </div>

            <div class="card" style="text-align: left;">
                <h3>Order Summary</h3>
                <p style="color: #666; font-size: 0.9rem;">Order ID: <?= htmlspecialchars($req_id) ?></p>
                <hr style="margin: 1rem 0;">
                <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                    <span>Service Fee</span>
                    <span>$15.00</span>
                </div>
                <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                    <span>Delivery</span>
                    <span>$2.00</span>
                </div>
                <hr style="margin: 1rem 0;">
                <div style="display: flex; justify-content: space-between; font-weight: 700; font-size: 1.2rem;">
                    <span>Total</span>
                    <span>$17.00</span>
                </div>
                
                <button onclick="alert('Payment Successful!'); window.location.href='dashboard.php';" class="btn btn-primary" style="width: 100%; margin-top: 1.5rem;">Pay Now</button>
            </div>

        </div>
    </div>
</div>

</body>
</html>
