<?php /* Template Name: product detail */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Details - Great Wall Furnitures Dubai</title>
  <meta name="description" content="View dimensions, comfort ratings, and wholesale pricing for office chairs, modular desks, and metal shelves. Instantly available from our Ras Al Khor warehouse.">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
<script>window.siteUrl = '<?php echo home_url(); ?>'; window.themeUrl = '<?php echo get_template_directory_uri(); ?>';</script>
<?php wp_head(); ?>
</head>
<body>

  <!-- Top Navigation Header -->
  <header class="header">
    <div class="container nav-container">
      <a href="<?php echo home_url('/'); ?>" class="logo" id="logo">
        <div class="logo-icon">GW</div>
        Great Wall<span>Furnitures</span>
      </a>
      
      <nav>
        <ul class="nav-links">
          <li><a href="<?php echo home_url('/'); ?>" class="nav-link">Home</a></li>
          <li><a href="<?php echo home_url('/products/'); ?>" class="nav-link">Shop Catalog</a></li>
          <li><a href="<?php echo home_url('/'); ?>" class="nav-link">Office Planner</a></li>
          <li><a href="<?php echo home_url('/portfolio/'); ?>" class="nav-link">Interactive Experience</a></li>
          <li><a href="<?php echo home_url('/contact/'); ?>" class="nav-link">Contact</a></li>
        </ul>
      </nav>

      <div class="nav-actions">
        <div class="store-toggle-container">
          <div class="store-toggle" id="global-store-toggle" data-active="office">
            <div class="store-toggle-bg"></div>
            <button class="store-toggle-btn active" data-target="office">Office</button>
            <button class="store-toggle-btn" data-target="home">Home</button>
          </div>
        </div>
        <button class="icon-btn" id="cart-btn" aria-label="Shopping Cart">
          <svg class="svg-icon" viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
          <span class="badge-count" id="cart-count">0</span>
        </button>
      </div>
    </div>
  </header>

  <!-- Product Detail Section -->
  <section class="section-padding">
    <div class="container" id="product-detail-container">
      <!-- Loaded dynamically via js/app.js?v=<?php echo time(); ?> -->
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <h3>Great Wall Furnitures</h3>
          <p>Durable, comfortable, and highly affordable furniture solutions for offices and homes across Dubai.</p>
        </div>
        <div class="footer-links">
          <h4>Products</h4>
          <ul class="footer-list">
            <li><a href="<?php echo home_url('/products/'); ?>?category=Chairs">Office Chairs</a></li>
            <li><a href="<?php echo home_url('/products/'); ?>?category=Desks">Office Desks</a></li>
            <li><a href="<?php echo home_url('/products/'); ?>?category=Shelves">Metal Shelving</a></li>
            <li><a href="<?php echo home_url('/products/'); ?>?category=Home">Home & Lounge</a></li>
            <li><a href="<?php echo home_url('/products/'); ?>?category=Bunkbeds">Bunkbeds</a></li>
          </ul>
        </div>
        <div class="footer-links">
          <h4>Customer Care</h4>
          <ul class="footer-list">
            <li><a href="<?php echo home_url('/'); ?>">Warehouse Directions</a></li>
            <li><a href="<?php echo home_url('/'); ?>">Relocation Planner</a></li>
            <li><a href="tel:043202921">Call Support</a></li>
          </ul>
        </div>
        <div class="footer-links">
          <h4>Dubai Warehouse</h4>
          <ul class="footer-list">
            <li>Ras Al Khor Industrial 2</li>
            <li>Plot 26B, Near Main Road</li>
            <li>Phone: 04-3202921</li>
            <li>Email: sales@greatwallfurniture.ae</li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 Great Wall Furnitures Trading LLC. All rights reserved. Registered in Dubai, UAE.</p>
        <p>Comfortable Seating • High-Speed Delivery • Wholesaler Direct</p>
      </div>
    </div>
  </footer>

  <!-- Shopping Cart Slide-out Drawer -->
  <div class="drawer-overlay" id="cart-overlay"></div>
  <div class="drawer" id="cart-drawer">
    <div class="drawer-header">
      <h3 style="font-size:20px;">Shopping Cart <span id="cart-item-count">(0)</span></h3>
      <button class="drawer-close" id="close-cart" aria-label="Close cart">×</button>
    </div>
    <div class="drawer-content" id="cart-items">
      <!-- Added items populated by JS -->
    </div>
    <div class="drawer-footer">
      <div style="display:flex; justify-content:space-between; margin-bottom:20px; font-weight:700; font-size:16px;">
        <span>Estimated Subtotal:</span>
        <span id="cart-total-amount" style="color:hsl(var(--color-primary)); font-size:18px;">AED 0</span>
      </div>
      <p style="font-size:12px; color:hsl(var(--color-text-muted)); margin-bottom:16px;">⚡ Orders inside Dubai qualify for Next-Day Cash on Delivery.</p>
      <button class="btn btn-primary" onclick="checkout()" style="width:100%; padding: 14px 20px;">
        Book Cash on Delivery Order
      </button>
    </div>
  </div>

  <!-- Compare Bar Bottom Sticky Drawer -->
  <div class="compare-bar" id="compare-bar">
    <div style="display:flex; align-items:center; gap:20px;">
      <span style="font-weight:700; font-size:14px; color:hsl(var(--color-text-dark));" id="compare-count">0 Selected</span>
      <div class="compare-items" id="compare-items-thumbs">
        <!-- Rendered by JS -->
      </div>
    </div>
    <div style="display:flex; gap:12px;">
      <button class="btn btn-secondary" id="close-compare-bar" style="padding: 8px 16px; font-size: 13px;">Clear All</button>
      <button class="btn btn-primary" id="compare-submit-btn" style="padding: 8px 24px; font-size: 13px;">Compare Now</button>
    </div>
  </div>

  <!-- Compare Matrix Modal -->
  <div class="modal-overlay" id="modal-overlay">
    <div class="modal-container">
      <div class="modal-header">
        <h2 style="font-size: 22px;">Product Features Comparison</h2>
        <button class="drawer-close" id="close-modal">×</button>
      </div>
      <div class="modal-body" id="compare-modal-body">
        <!-- Comparison Table Generated by JS -->
      </div>
    </div>
  </div>

  <script src="<?php echo get_template_directory_uri(); ?>/js/app.js?v=<?php echo time(); ?>"></script>
<?php wp_footer(); ?>
</body>
</html>



