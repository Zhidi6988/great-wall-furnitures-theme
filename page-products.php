<?php /* Template Name: products */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop Office & Home Furniture Catalog | Great Wall Dubai</title>
  <meta name="description" content="Search and browse our large catalog of affordable office chairs, modular desks, shelving racks, and comfortable lounge armchairs. Direct wholesale prices in Dubai.">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    .catalog-layout {
      display: grid;
      grid-template-columns: 280px 1fr;
      gap: 40px;
      margin-top: 40px;
    }
    
    @media (max-width: 992px) {
      .catalog-layout {
        grid-template-columns: 1fr;
        gap: 30px;
      }
    }
    
    .sidebar-filter {
      background-color: hsl(var(--color-bg-card));
      border: 1px solid hsl(var(--color-border));
      border-radius: var(--radius-md);
      padding: 24px;
      box-shadow: var(--shadow-sm);
      height: fit-content;
      position: sticky;
      top: 100px;
    }
    
    .filter-section {
      border-bottom: 1px solid hsl(var(--color-border));
      padding-bottom: 20px;
      margin-bottom: 20px;
    }
    
    .filter-section:last-child {
      border-bottom: none;
      padding-bottom: 0;
      margin-bottom: 0;
    }
    
    .filter-title {
      font-size: 16px;
      margin-bottom: 12px;
      font-weight: 700;
    }
    
    .catalog-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 24px;
      background-color: hsl(var(--color-bg-card));
      border: 1px solid hsl(var(--color-border));
      border-radius: var(--radius-md);
      padding: 16px 24px;
      box-shadow: var(--shadow-sm);
    }
    
    @media (max-width: 576px) {
      .catalog-header {
        flex-direction: column;
        align-items: stretch;
        gap: 16px;
      }
    }
  </style>
<script>window.siteUrl = '<?php echo home_url(); ?>'; window.themeUrl = '<?php echo get_template_directory_uri(); ?>';</script>
<?php wp_head(); ?>
</head>
<body>
  <div id="splash-screen">
    <img src="<?php echo get_template_directory_uri(); ?>/images/great_wall_logo.png" alt="Loading">
  </div>
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
          <li><a href="<?php echo home_url('/products/'); ?>" class="nav-link active">Shop Catalog</a></li>
          
          <li><a href="<?php echo home_url('/portfolio/'); ?>" class="nav-link">3D Experience</a></li>
          <li><a href="<?php echo home_url('/contact/'); ?>" class="nav-link">Contact</a></li>
          <li><a href="<?php echo home_url('/checkout/'); ?>" class="nav-link">Checkout</a></li>
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
        <button class="icon-btn" onclick="window.location.href='<?php echo home_url('/account/'); ?>'" aria-label="My Account" style="margin-right: 8px;">
          <svg class="svg-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
        </button>
        <button class="icon-btn" id="cart-btn" aria-label="Shopping Cart">
          <svg class="svg-icon" viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
          <span class="badge-count" id="cart-count">0</span>
        </button>
      </div>
    </div>
  </header>

  <!-- Shop Banner (Image 1 style) -->
  <section class="shop-banner">
    <div class="container">
      <h1 class="shop-banner-title">Shop</h1>
      <div class="breadcrumbs">
        <a href="<?php echo home_url('/'); ?>">Home</a> <span style="margin: 0 8px;">/</span> Shop
      </div>
    </div>
  </section>

  <!-- Catalog Section -->
  <section class="section-padding" style="padding-top: 40px;">
    <div class="container">
      <div class="catalog-layout">
        <!-- Sidebar Filters -->
        <aside class="sidebar-filter">
          <!-- Search box -->
          <div class="filter-section">
            <h3 class="filter-title">Search Products</h3>
            <input type="text" id="search-input" class="form-input" placeholder="Type chair, desk, model..." style="padding:10px 14px; font-size:14px;">
          </div>
          
          <!-- Category selection -->
          <div class="filter-section">
            <h3 class="filter-title">Filter by Category</h3>
            <ul id="category-filter-list" style="list-style: none; padding: 0; display: flex; flex-direction: column; gap: 8px;">
              <!-- Rendered by JS to show counts -->
            </ul>
          </div>

          <!-- Price Range Filter -->
          <div class="filter-section">
            <h3 class="filter-title">Price Range</h3>
            <div style="display: flex; align-items: center; gap: 10px;">
              <input type="number" id="price-min" class="form-input" placeholder="Min" min="0" style="width: 100%; padding:8px; font-size:14px;">
              <span style="color: hsl(var(--color-text-muted));">-</span>
              <input type="number" id="price-max" class="form-input" placeholder="Max" min="0" style="width: 100%; padding:8px; font-size:14px;">
            </div>
            <button id="apply-price-btn" class="btn btn-secondary" style="width: 100%; margin-top: 10px; padding: 8px; font-size: 13px;">Apply</button>
          </div>

          <!-- Highlight of our USPs -->
          <div class="filter-section" style="background-color: hsl(var(--color-accent) / 0.05); border-radius: var(--radius-sm); padding: 16px; border: 1px solid hsl(var(--color-accent) / 0.15);">
            <h4 style="font-size: 14px; font-weight:700; color:hsl(var(--color-accent)); margin-bottom:8px; display:flex; align-items:center; gap:6px;">📦 Wholesaler Delivery Guarantee</h4>
            <p style="font-size: 12px; line-height: 1.4; color: hsl(var(--color-text-muted));">We hold immediate stock of all units in Dubai. Ordering here schedules delivery within 24-48 hours.</p>
          </div>
        </aside>

        <!-- Main Product Grid & Header -->
        <main>
          <div class="catalog-header">
            <div style="font-size: 14px; font-weight:600; color:hsl(var(--color-text-muted));">
              Select products to compare side-by-side
            </div>
            
            <!-- Sorting -->
            <div style="display:flex; align-items:center; gap:12px;">
              <label for="sort-select" style="font-size:13px; font-weight:700; color:hsl(var(--color-text-muted)); white-space:nowrap;">Sort by:</label>
              <select id="sort-select" class="form-select" style="padding:8px 12px; font-size:13px; border-radius:var(--radius-sm); width:180px;">
                <option value="default">Relevance</option>
                <option value="price-low">Price: Low to High</option>
                <option value="price-high">Price: High to Low</option>
                <option value="rating">Top Rated</option>
                <option value="stock">Vast Stock Availability</option>
              </select>
            </div>
          </div>

          <!-- Main Grid -->
          <div class="product-grid" id="catalog-products">
            <!-- Rendered by JS -->
          </div>
        </main>
      </div>
    </div>
  </section>
  <!-- Refund Policy Section -->
  <section class="section-padding" style="background-color: hsl(var(--color-bg-card));">
    <div class="container" style="max-width: 800px; text-align: center;">
      <div style="background: white; border: 1px solid hsl(var(--color-border)); border-radius: 16px; padding: 40px; box-shadow: var(--shadow-sm);">
        <div style="width: 64px; height: 64px; background: rgba(242, 61, 66, 0.1); color: #F23D42; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 28px; margin: 0 auto 20px;">
          <i class="fas fa-undo-alt"></i>
        </div>
        <h2 style="font-size: 2rem; color: hsl(var(--color-text-dark)); margin-bottom: 16px;">Easy Access Refund Policy</h2>
        <p style="color: hsl(var(--color-text-muted)); font-size: 1.1rem; line-height: 1.6; margin-bottom: 24px;">
          We stand by the wholesale quality of our furniture. If you are not completely satisfied with your purchase, you have <strong>14 days</strong> to return it in original condition. 
        </p>
        <p style="color: hsl(var(--color-text-muted)); font-size: 1rem; line-height: 1.6; margin-bottom: 30px;">
          Because we handle our own logistics in Dubai, refunds and returns are incredibly fast. Simply WhatsApp us with your order number, and our team will arrange a free collection from your office or home within 48 hours. No hidden restocking fees!
        </p>
        <a href="https://wa.me/971501234567" target="_blank" class="btn btn-secondary" style="border-color: #F23D42; color: #F23D42; font-weight: 600;">Request a Return via WhatsApp</a>
      </div>
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








