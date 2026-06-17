<?php /* Template Name: account */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Account | Great Wall Furnitures</title>
  <meta name="description" content="Track your orders, view invoices, and easily reorder wholesale office furniture in Dubai.">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script>window.themeUrl = '<?php echo get_template_directory_uri(); ?>';</script>
<?php wp_head(); ?>
<style>
  /* Custom Styles for Account Dashboard */
  .account-grid {
    display: grid;
    grid-template-columns: 250px 1fr;
    gap: 40px;
  }
  @media (max-width: 768px) {
    .account-grid {
      grid-template-columns: 1fr;
    }
  }
  .account-sidebar {
    background: white;
    border-radius: var(--radius-md);
    border: 1px solid hsl(var(--color-border));
    padding: 24px;
    box-shadow: var(--shadow-sm);
  }
  .account-nav {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  .account-nav li {
    margin-bottom: 8px;
  }
  .account-nav a {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 16px;
    color: hsl(var(--color-text-muted));
    text-decoration: none;
    border-radius: var(--radius-sm);
    font-weight: 500;
    transition: all 0.2s ease;
  }
  .account-nav a:hover {
    background: hsl(var(--color-bg-light));
    color: hsl(var(--color-text-dark));
  }
  .account-nav a.active {
    background: hsl(var(--color-primary) / 0.1);
    color: hsl(var(--color-primary));
  }
  
  /* Order Tracker Styles */
  .tracker-container {
    background: white;
    border-radius: var(--radius-md);
    border: 1px solid hsl(var(--color-border));
    padding: 30px;
    box-shadow: var(--shadow-sm);
    margin-bottom: 40px;
  }
  .tracker-steps {
    display: flex;
    justify-content: space-between;
    position: relative;
    margin-top: 30px;
  }
  .tracker-steps::before {
    content: '';
    position: absolute;
    top: 20px;
    left: 40px;
    right: 40px;
    height: 4px;
    background: hsl(var(--color-border));
    z-index: 1;
  }
  .tracker-steps::after {
    content: '';
    position: absolute;
    top: 20px;
    left: 40px;
    right: 50%; /* Active Progress */
    height: 4px;
    background: hsl(var(--color-primary));
    z-index: 2;
  }
  .step {
    position: relative;
    z-index: 3;
    text-align: center;
    width: 100px;
  }
  .step-icon {
    width: 44px;
    height: 44px;
    background: white;
    border: 4px solid hsl(var(--color-border));
    border-radius: 50%;
    margin: 0 auto 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: hsl(var(--color-text-muted));
    font-size: 1.1rem;
    transition: all 0.3s;
  }
  .step.completed .step-icon, .step.active .step-icon {
    border-color: hsl(var(--color-primary));
    color: hsl(var(--color-primary));
  }
  .step.completed .step-icon {
    background: hsl(var(--color-primary));
    color: white;
  }
  .step-label {
    font-size: 0.85rem;
    font-weight: 600;
    color: hsl(var(--color-text-muted));
  }
  .step.completed .step-label, .step.active .step-label {
    color: hsl(var(--color-text-dark));
  }

  /* Order History Table */
  .order-table-container {
    background: white;
    border-radius: var(--radius-md);
    border: 1px solid hsl(var(--color-border));
    overflow: hidden;
    box-shadow: var(--shadow-sm);
  }
  .order-table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
  }
  .order-table th {
    background: hsl(var(--color-bg-light));
    padding: 16px 24px;
    font-size: 0.9rem;
    color: hsl(var(--color-text-muted));
    font-weight: 600;
    border-bottom: 1px solid hsl(var(--color-border));
  }
  .order-table td {
    padding: 20px 24px;
    border-bottom: 1px solid hsl(var(--color-border));
    color: hsl(var(--color-text-dark));
    font-size: 0.95rem;
  }
  .order-table tr:last-child td {
    border-bottom: none;
  }
  .status-badge {
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 700;
  }
  .status-transit { background: #FEF3C7; color: #D97706; }
  .status-delivered { background: #DEF7EC; color: #03543F; }
  .btn-reorder {
    padding: 8px 16px;
    font-size: 0.85rem;
  }
</style>
</head>
<body>
  <div id="splash-screen">
    <img src="<?php echo get_template_directory_uri(); ?>/images/great_wall_logo.png" alt="Loading">
  </div>
  
  <!-- Top Navigation Header -->
  <header class="header" style="background: hsl(var(--color-bg-base)); border-bottom: 1px solid hsl(var(--color-border)); padding: 15px 0;">
    <div class="container nav-container" style="justify-content: space-between;">
      <a href="<?php echo home_url('/'); ?>" class="logo" id="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo_piloteer_transparent.png" alt="Piloteer Logo" style="height: 45px;">
        Great Wall<span>| Office</span>
      </a>
      
      <div class="nav-actions">
        <a href="<?php echo home_url('/'); ?>" class="btn btn-secondary" style="font-size: 0.9rem; padding: 10px 20px;">
          <i class="fas fa-arrow-left" style="margin-right: 8px;"></i> Back to Homepage
        </a>
      </div>
    </div>
  </header>

  <!-- Account Dashboard Section -->
  <section class="section-padding" style="background-color: hsl(var(--color-bg-light)); min-height: 80vh;">
    <div class="container account-grid">
      
      <!-- Sidebar Navigation -->
      <aside>
        <div class="account-sidebar">
          <div style="text-align: center; margin-bottom: 24px; padding-bottom: 24px; border-bottom: 1px solid hsl(var(--color-border));">
            <div style="width: 64px; height: 64px; background: hsl(var(--color-primary)); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; margin: 0 auto 12px;">
              AA
            </div>
            <h3 style="color: hsl(var(--color-text-dark)); font-size: 1.1rem;">Ali Al-Maktoum</h3>
            <p style="color: hsl(var(--color-text-muted)); font-size: 0.85rem;">B2B Wholesale Account</p>
          </div>
          <ul class="account-nav">
            <li><a href="#" class="active"><i class="fas fa-th-large" style="width: 20px;"></i> Dashboard</a></li>
            <li><a href="#"><i class="fas fa-box" style="width: 20px;"></i> Orders & Tracking</a></li>
            <li><a href="#"><i class="fas fa-file-invoice-dollar" style="width: 20px;"></i> Invoices</a></li>
            <li><a href="#"><i class="fas fa-heart" style="width: 20px;"></i> Saved Items</a></li>
            <li><a href="#"><i class="fas fa-map-marker-alt" style="width: 20px;"></i> Delivery Addresses</a></li>
            <li><a href="#" style="color: #EF4444; margin-top: 24px;"><i class="fas fa-sign-out-alt" style="width: 20px;"></i> Sign Out</a></li>
          </ul>
        </div>
      </aside>

      <!-- Main Content Area -->
      <main>
        <h1 style="font-size: 2rem; color: hsl(var(--color-text-dark)); margin-bottom: 8px;">My Dashboard</h1>
        <p style="color: hsl(var(--color-text-muted)); margin-bottom: 30px;">Track your deliveries, view past wholesale orders, and request invoices.</p>

        <!-- Active Delivery Tracker -->
        <div class="tracker-container">
          <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid hsl(var(--color-border)); padding-bottom: 16px;">
            <div>
              <h3 style="font-size: 1.2rem; color: hsl(var(--color-text-dark));">Active Order: #GW-10294</h3>
              <p style="color: hsl(var(--color-text-muted)); font-size: 0.9rem; margin-top: 4px;">Expected Delivery: Today, 2:00 PM - 5:00 PM</p>
            </div>
            <button class="btn btn-secondary" style="padding: 8px 16px; font-size: 0.85rem;">View Invoice</button>
          </div>
          
          <div class="tracker-steps">
            <div class="step completed">
              <div class="step-icon"><i class="fas fa-check"></i></div>
              <div class="step-label">Order Placed</div>
            </div>
            <div class="step completed">
              <div class="step-icon"><i class="fas fa-cog"></i></div>
              <div class="step-label">Processing</div>
            </div>
            <div class="step active">
              <div class="step-icon"><i class="fas fa-truck"></i></div>
              <div class="step-label">Out for Delivery</div>
            </div>
            <div class="step">
              <div class="step-icon"><i class="fas fa-home"></i></div>
              <div class="step-label">Delivered</div>
            </div>
          </div>
        </div>

        <!-- Order History Table -->
        <h2 style="font-size: 1.5rem; color: hsl(var(--color-text-dark)); margin-bottom: 20px;">Order History</h2>
        <div class="order-table-container">
          <table class="order-table">
            <thead>
              <tr>
                <th>Order ID</th>
                <th>Date</th>
                <th>Total</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>#GW-10294</strong><br><span style="font-size: 0.8rem; color: hsl(var(--color-text-muted));">50x Ergonomic Mesh Chair</span></td>
                <td>Oct 12, 2026</td>
                <td>AED 17,450</td>
                <td><span class="status-badge status-transit">In Transit</span></td>
                <td><button class="btn btn-secondary btn-reorder" onclick="alert('Items added to cart!')">Reorder</button></td>
              </tr>
              <tr>
                <td><strong>#GW-08412</strong><br><span style="font-size: 0.8rem; color: hsl(var(--color-text-muted));">12x L-Shape Manager Desk</span></td>
                <td>Aug 05, 2026</td>
                <td>AED 10,788</td>
                <td><span class="status-badge status-delivered">Delivered</span></td>
                <td><button class="btn btn-secondary btn-reorder" onclick="alert('Items added to cart!')">Reorder</button></td>
              </tr>
              <tr>
                <td><strong>#GW-07101</strong><br><span style="font-size: 0.8rem; color: hsl(var(--color-text-muted));">10x 5-Tier Metal Storage Shelf</span></td>
                <td>Jul 22, 2026</td>
                <td>AED 2,100</td>
                <td><span class="status-badge status-delivered">Delivered</span></td>
                <td><button class="btn btn-secondary btn-reorder" onclick="alert('Items added to cart!')">Reorder</button></td>
              </tr>
            </tbody>
          </table>
        </div>

      </main>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container footer-grid">
      <div class="footer-col">
        <div class="logo">
          Great Wall<span>Furnitures</span>
        </div>
        <p style="margin-top: 16px; font-size: 14px; opacity: 0.8;">
          Your trusted wholesale partner for office and home furniture in Dubai.
        </p>
      </div>
      <div class="footer-col">
        <h4>Shop</h4>
        <ul>
          <li><a href="<?php echo home_url('/products/'); ?>">Office Chairs</a></li>
          <li><a href="<?php echo home_url('/products/'); ?>">Modular Desks</a></li>
          <li><a href="<?php echo home_url('/products/'); ?>">Metal Shelves</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Company</h4>
        <ul>
          <li><a href="<?php echo home_url('/'); ?>">About Us</a></li>
          <li><a href="<?php echo home_url('/contact/'); ?>">Contact Us</a></li>
          <li><a href="#">Shipping Policy</a></li>
        </ul>
      </div>
    </div>
    <div class="container" style="text-align: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 24px; margin-top: 40px; font-size: 13px; opacity: 0.6;">
      &copy; 2026 Great Wall Furnitures. All rights reserved.
    </div>
  </footer>

<?php wp_footer(); ?>
</body>
</html>

