<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Premium Laundry Service<br>At Your Doorstep</h1>
        <p>Professional wash, dry, and fold service. We pick up your dirty laundry and return it fresh and clean.</p>
        <a href="register.php" class="btn btn-primary" style="font-size: 1.2rem; padding: 1rem 2.5rem;">Schedule Pickup</a>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="section">
    <h2 class="section-title">Our Services</h2>
    <div class="card-grid">
        <div class="card">
            <div class="card-icon"><i class="fas fa-tshirt"></i></div>
            <h3>Wash & Fold</h3>
            <p>Everyday laundry washed, dried, and neatly folded.</p>
        </div>
        <div class="card">
            <div class="card-icon"><i class="fas fa-user-tie"></i></div>
            <h3>Dry Cleaning</h3>
            <p>Special care for your delicate suits and dresses.</p>
        </div>
        <div class="card">
            <div class="card-icon"><i class="fas fa-wind"></i></div>
            <h3>Steam Ironing</h3>
            <p>Professional pressing for a crisp, wrinkle-free look.</p>
        </div>
        <div class="card">
            <div class="card-icon"><i class="fas fa-truck"></i></div>
            <h3>Free Pickup</h3>
            <p>We collect and deliver to your location at your convenience.</p>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="section" style="background: var(--white);">
    <h2 class="section-title">Transparent Pricing</h2>
    <div class="form-container" style="margin: 0 auto; max-width: 800px;">
        <div class="pricing-grid">
            <div class="price-item">
                <span>Shirt (Wash & Iron)</span>
                <strong>$3.00</strong>
            </div>
            <div class="price-item">
                <span>Trousers (Dry Clean)</span>
                <strong>$5.00</strong>
            </div>
            <div class="price-item">
                <span>Suit (2 pc)</span>
                <strong>$12.00</strong>
            </div>
            <div class="price-item">
                <span>Bed Sheet (Single)</span>
                <strong>$4.00</strong>
            </div>
            <div class="price-item">
                <span>Duvet Cover</span>
                <strong>$8.00</strong>
            </div>
             <div class="price-item">
                <span>Wash & Fold (per kg)</span>
                <strong>$2.50</strong>
            </div>
        </div>
        <div style="text-align: center; margin-top: 2rem;">
            <a href="register.php" class="btn btn-primary">See Full Price List</a>
        </div>
    </div>
</section>

<footer>
    <div class="section" style="background: var(--secondary); color: var(--white); padding: 3rem 5%;">
        <div class="card-grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); text-align: left;">
            <div>
                <h3>WashApp</h3>
                <p>Making laundry day easy.</p>
            </div>
            <div>
                <h4>Quick Links</h4>
                <ul style="opacity: 0.8;">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </div>
            <div>
                <h4>Contact</h4>
                <p><i class="fas fa-phone"></i> +94 11 234 5678</p>
                <p><i class="fas fa-envelope"></i> info@washapp.lk</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 3rem; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem;">
            <p>&copy; 2026 WashApp. All rights reserved.</p>
        </div>
    </div>
</footer>

</body>
</html>
