<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Great Wall Furnitures | Comfort & Affordable Office Solutions Dubai</title>
  <meta name="description" content="Wholesale and retail office and home furniture in Dubai. Comfort, durability, and high-speed delivery direct from our Ras Al Khor warehouse.">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script>window.siteUrl = '<?php echo home_url(); ?>'; window.themeUrl = '<?php echo get_template_directory_uri(); ?>';</script>
<?php wp_head(); ?>
</head>
<body>
  <!-- Cinematic Splash Screen -->
  <div id="splash-screen">
    <img src="<?php echo get_template_directory_uri(); ?>/images/great_wall_logo.png" alt="Loading">
  </div>

  <!-- Top Navigation Header -->
  <header class="header transparent">
    <div class="container nav-container">
      <a href="<?php echo home_url('/'); ?>" class="logo" id="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo_piloteer_transparent.png" alt="Piloteer Logo" style="height: 45px;">
        Great Wall<span>| Office</span>
      </a>
      
      <nav>
        <ul class="nav-links">
          <li><a href="<?php echo home_url('/'); ?>" class="nav-link active">Home</a></li>
          <li><a href="<?php echo home_url('/products/'); ?>" class="nav-link">Shop Catalog</a></li>
          <li><a href="#planner-section" class="nav-link">Office Planner</a></li>
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
        <button class="icon-btn" id="theme-toggle-btn" aria-label="Toggle Dark Mode" style="margin-right: 8px;">
          <svg class="svg-icon" id="theme-icon-moon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
          <svg class="svg-icon" id="theme-icon-sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
        </button>
        <button class="icon-btn" id="cart-btn" aria-label="Shopping Cart">
          <svg class="svg-icon" viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
          <span class="badge-count" id="cart-count">0</span>
        </button>
      </div>
    </div>
  </header>

  <!-- Hero Section (Dynamic Slider) -->
  <!-- Hero Section (Dynamic Slider) -->
  <section class="hero" id="hero-slider">
    <div id="hero-slider-bg">
      <!-- Backgrounds injected by JS -->
    </div>
    <div class="container" style="position: relative; z-index: 2;">
      <div class="hero-content-fullscreen" id="hero-content">
        <!-- Content injected by JS -->
      </div>
    </div>
  </section>

  <!-- Trusted By Logo Ticker -->
  <section class="trusted-ticker-section fade-up">
    <div class="ticker-label">Trusted by Dubai's top enterprises</div>
    <div class="ticker-wrapper">
      <div class="ticker-track">
        <!-- Ticker items (duplicated for seamless loop) -->
        <div class="ticker-item">Corporate Hub</div>
        <div class="ticker-item">Tech Solutions LLC</div>
        <div class="ticker-item">Global Logistics</div>
        <div class="ticker-item">Skyline Real Estate</div>
        <div class="ticker-item">Finance Partners</div>
        <div class="ticker-item">StartUp District</div>
        <!-- Duplicates -->
        <div class="ticker-item">Corporate Hub</div>
        <div class="ticker-item">Tech Solutions LLC</div>
        <div class="ticker-item">Global Logistics</div>
        <div class="ticker-item">Skyline Real Estate</div>
        <div class="ticker-item">Finance Partners</div>
        <div class="ticker-item">StartUp District</div>
      </div>
    </div>
  </section>

  <!-- Overlapping Editorial Grid (Image 2 style) -->
  <section class="section-padding fade-up">
    <div class="container overlap-container">
      <!-- Dark/Red Block -->
      <div class="overlap-left" style="background-color: hsl(var(--color-primary));">
        <span class="editorial-tag" style="color: rgba(255,255,255,0.8);">OUR ADVANTAGE</span>
        <h2 class="editorial-title" style="color: white; font-weight: 500;">Wholesale speed meets premium comfort</h2>
        <p style="color: rgba(255,255,255,0.9); font-size: 16px; margin-bottom: 40px; line-height: 1.8;">
          By selling simple, standard-appearance designs, we skip premium design fees and pass massive savings directly to you. Coupled with our vast Ras Al Khor warehouse storage, we guarantee next-day dispatch on the most comfortable setups.
        </p>
        <span class="signature-accent" style="color: white;">Great Wall</span>
      </div>
      
      <!-- Overlapping Cards -->
      <div class="overlap-right" id="category-grid">
        <!-- Rendered dynamically by app.js based on store toggle to ensure consistent 2x2 grid -->
      </div>
    </div>
  </section>

  <!-- Specialty Chairs Section (Zig-Zag Editorial) -->
  <section class="section-padding fade-up" style="padding-top: 40px;">
    <div class="container zig-zag-grid" id="interactive-experience">
      <!-- Dynamically injected by app.js -->
    </div>
  </section>

  <!-- Featured Products Section -->
  <section class="section-padding bestsellers fade-up" style="background-color: hsl(var(--color-bg-card)); border-top:1px solid hsl(var(--color-border));">
    <div class="container">
      <div class="section-header">
        <div>
          <span style="font-weight:700; color:hsl(var(--color-primary)); font-size:14px; text-transform:uppercase; letter-spacing:0.05em;">Popular Choices</span>
          <h2 class="section-title">Comfort-first workspaces</h2>
        </div>
        <a href="<?php echo home_url('/products/'); ?>" class="btn btn-secondary">View All Products</a>
      </div>
      
      <div class="product-grid" id="featured-products">
        <!-- Rendered via JS -->
      </div>
    </div>
  </section>

  <!-- Setup/Renovation Planner Section -->
  <section class="section-padding space-planner fade-up" id="planner-section" style="background-color: hsl(var(--color-bg-card)); border-top:1px solid hsl(var(--color-border)); border-bottom:1px solid hsl(var(--color-border));">
    <div class="container">
      <div class="planner-widget">
        <div class="planner-header">
          <span id="planner-badge" style="font-weight:700; color:hsl(var(--color-primary)); font-size:14px; text-transform:uppercase; letter-spacing:0.05em;">Renovation Helper</span>
          <h2 id="planner-title" style="font-size: clamp(26px, 4vw, 36px); margin-top:8px;">Configure your new office layout instantly</h2>
          <p id="planner-desc" style="color: hsl(var(--color-text-muted)); margin-top:12px;">Tell us about your team setup and get an instant pricing layout for chairs, desks, and shelves with next-day shipping.</p>
        </div>
        
        <div class="planner-grid" style="grid-template-columns: 1fr 1.5fr; align-items: stretch; gap: 40px;">
          
          <!-- Left Side: Form & Results -->
          <div style="display: flex; flex-direction: column; gap: 24px;">
            <!-- Planner Form -->
            <form class="planner-form" id="planner-form">
              <div class="form-group">
                <label id="planner-size-label" class="form-label" for="space-size">Approximate Office Space Size</label>
                <select class="form-select" id="space-size">
                  <option value="small">Home Office / Micro Setup (1-2 people)</option>
                  <option value="medium" selected>Small Office Room (3-6 people)</option>
                  <option value="large">Medium-Large Office (7-15 people)</option>
                </select>
              </div>
              
              <div class="form-group">
                <label id="planner-count-label" class="form-label" for="staff-count">Number of Workstations (Staff Count)</label>
                <input class="form-input" type="number" id="staff-count" min="1" max="50" value="4">
              </div>

              <div class="form-group">
                <label id="planner-focus-label" class="form-label" for="furniture-focus">Primary Layout Requirement</label>
                <select class="form-select" id="furniture-focus">
                  <option value="comfort" selected>Maximum Cushioning & Lumbar Adjustability</option>
                  <option value="budget">Simple Workstations & Maximum Value</option>
                  <option value="balanced">Balanced Comfort & Value</option>
                </select>
              </div>
            </form>

            <!-- Planner Results Visualizer -->
            <div class="planner-results" style="flex-grow: 1; display: flex; flex-direction: column;">
              <div style="flex-grow: 1;">
                <div class="results-header">
                  <h3 id="planner-results-title" class="results-title">Suggested Transition Bundle</h3>
                  <p id="planner-results-desc" class="results-desc">Designed to provide matching home-office comfort and maximum workflow efficiency.</p>
                </div>
                
                <ul class="results-list" id="planner-items-list">
                  <!-- Calculated via JS -->
                </ul>
              </div>
            </div>
          </div>

          <!-- Right Side: Interactive Panorama Viewer & Action Block -->
          <div class="panorama-wrapper" style="display: flex; flex-direction: column; gap: 24px;">
            <div style="display: flex; flex-direction: column; height: 100%;">
              <div class="panorama-header" style="display: flex; justify-content: space-between; align-items: center; background: hsl(var(--color-bg-warm)); padding: 16px 20px; border-radius: var(--radius-md) var(--radius-md) 0 0; border: 1px solid hsl(var(--color-border)); border-bottom: none;">
                <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; color: hsl(var(--color-text-dark)); margin: 0;">Interactive Layout</h4>
                <span class="panorama-badge" style="background: hsl(var(--color-primary)); color: white; padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; display: flex; align-items: center; gap: 6px;">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                  Drag to pan
                </span>
              </div>
              
              <div class="panorama-container" id="panorama-container">
                <!-- Default Image is Medium -->
                <img src="<?php echo get_template_directory_uri(); ?>/images/pano_medium_office_1780574059645.png" id="panorama-img" class="panorama-image" alt="360 Office View">
              </div>
            </div>

            <!-- Action Block (Moved from Left Column) -->
            <div class="planner-results" style="margin-top: auto; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;">
              <div class="results-total" style="margin-bottom: 0; padding-top: 0; border-top: none;">
                <span class="total-label">Total Estimated Cost:</span>
                <span class="total-amount" id="planner-total-amount">AED 0</span>
              </div>
              
              <button class="btn btn-primary" id="planner-add-bundle-btn" style="padding: 16px 36px; font-size: 16px;">
                Add Complete Bundle to Cart
              </button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Contact & Warehouse Location Info (Immersive Map) -->
  <section id="contact-section" class="immersive-map-section full-width-banner fade-up">
    <div class="map-background" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/dubai_warehouse_map.png');"></div>
    <div class="container">
      <div class="contact-glass-card">
        <span class="editorial-tag">DIRECT WHOLESALE</span>
        <h2 class="editorial-title" style="color: white; margin-bottom: 12px;">Visit us or call for bulk orders</h2>
        <p style="color: #c4d4e6; margin-bottom:24px; line-height: 1.6; font-size: 0.95rem;">
          Our direct-to-consumer showroom and warehouse is located in the heart of Ras Al Khor industrial district. We carry immediate stock of all office chairs, metal shelves, modular desks, and home setups.
        </p>
        
        <div class="contact-details-list">
          <div class="contact-detail-item">
            <div class="icon-circle"><i class="fas fa-phone-alt"></i></div>
            <div>
              <span class="detail-label">Direct Line</span>
              <a href="tel:043202921" class="detail-value highlight">04-3202921</a>
            </div>
          </div>
          <div class="contact-detail-item">
            <div class="icon-circle"><i class="fas fa-map-marker-alt"></i></div>
            <div>
              <span class="detail-label">Warehouse Location</span>
              <span class="detail-value">Ras Al Khor Industrial Area 2, Dubai</span>
            </div>
          </div>
          <div class="contact-detail-item">
            <div class="icon-circle"><i class="fas fa-clock"></i></div>
            <div>
              <span class="detail-label">Working Hours</span>
              <span class="detail-value">Mon - Sat: 9:00 AM - 7:00 PM</span>
            </div>
          </div>
        </div>
        
        <a href="https://2gis.ae" target="_blank" class="btn btn-primary" style="width: 100%; text-align: center; margin-top: 20px; box-shadow: 0 4px 15px rgba(242, 61, 66, 0.3);">Get Directions to Warehouse</a>
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
            <li><a href="#contact-section">Warehouse Directions</a></li>
            <li><a href="#planner-section">Relocation Planner</a></li>
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
  <!-- Top Navigation Header -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/app.js?v=<?php echo time(); ?>"></script>
<?php wp_footer(); ?>
</body>
</html>





