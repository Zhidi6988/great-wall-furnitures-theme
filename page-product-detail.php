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
          <li><a href="<?php echo home_url('/products/'); ?>" class="nav-link">Shop Catalog</a></li>
          
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

  <!-- Product Detail Section -->
  <section class="section-padding">
    <div class="container" id="product-detail-container">
      <!-- Loaded dynamically via js/app.js?v=<?php echo time(); ?> -->
    </div>
  </section>

  <!-- Related Products / Upselling Section (UI Mockup) -->
  <section class="section-padding" style="background-color: hsl(var(--color-bg-light)); border-top: 1px solid hsl(var(--color-border));">
    <div class="container">
      <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 30px;">
        <div>
          <span style="color: hsl(var(--color-primary)); font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Complete Your Setup</span>
          <h2 style="font-size: 2rem; color: hsl(var(--color-text-dark)); margin-top: 8px;">Frequently Bought Together</h2>
        </div>
        <a href="<?php echo home_url('/products/'); ?>" class="btn btn-secondary" style="display: none;">View All</a>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 24px;">
        
        <!-- Related Product Card 1 -->
        <div class="product-card">
          <div class="product-image-container" style="background-color: white; padding: 20px;">
            <div class="product-badge">Top Seller</div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/prod_sovereign_chair_1780577397204.png" alt="Ergonomic Mesh Chair" style="width: 100%; height: 200px; object-fit: contain; mix-blend-mode: multiply;">
            <button class="wishlist-btn"><i class="far fa-heart"></i></button>
          </div>
          <div class="product-info" style="display: flex; flex-direction: column; flex-grow: 1;">
            <h3 class="product-title">Ergonomic Mesh Chair Pro</h3>
            <div class="product-price">
              <span class="price-current">AED 349</span>
              <span class="price-original">AED 499</span>
            </div>
            <button class="btn btn-primary add-to-cart-btn" style="width: 100%; margin-top: auto; justify-content: center;">Add to Cart</button>
          </div>
        </div>

        <!-- Related Product Card 2 -->
        <div class="product-card">
          <div class="product-image-container" style="background-color: white; padding: 20px;">
            <img src="<?php echo get_template_directory_uri(); ?>/images/prod_zenith_desk_1780577410628.png" alt="L-Shape Manager Desk" style="width: 100%; height: 200px; object-fit: contain; mix-blend-mode: multiply;">
            <button class="wishlist-btn"><i class="far fa-heart"></i></button>
          </div>
          <div class="product-info" style="display: flex; flex-direction: column; flex-grow: 1;">
            <h3 class="product-title">L-Shape Manager Desk</h3>
            <div class="product-price">
              <span class="price-current">AED 899</span>
            </div>
            <button class="btn btn-primary add-to-cart-btn" style="width: 100%; margin-top: auto; justify-content: center;">Add to Cart</button>
          </div>
        </div>

        <!-- Related Product Card 3 -->
        <div class="product-card">
          <div class="product-image-container" style="background-color: white; padding: 20px;">
            <div class="product-badge" style="background: hsl(var(--color-bg-dark));">Heavy Duty</div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/prod_titan_shelf_1780577423430.png" alt="5-Tier Metal Shelf" style="width: 100%; height: 200px; object-fit: contain; mix-blend-mode: multiply;">
            <button class="wishlist-btn"><i class="far fa-heart"></i></button>
          </div>
          <div class="product-info" style="display: flex; flex-direction: column; flex-grow: 1;">
            <h3 class="product-title">5-Tier Metal Storage Shelf</h3>
            <div class="product-price">
              <span class="price-current">AED 210</span>
              <span class="price-original">AED 250</span>
            </div>
            <button class="btn btn-primary add-to-cart-btn" style="width: 100%; margin-top: auto; justify-content: center;">Add to Cart</button>
          </div>
        </div>

        <!-- Related Product Card 4 -->
        <div class="product-card">
          <div class="product-image-container" style="background-color: white; padding: 20px;">
            <img src="<?php echo get_template_directory_uri(); ?>/images/prod_metro_chair_1780643241235.png" alt="Executive Leather Chair" style="width: 100%; height: 200px; object-fit: contain; mix-blend-mode: multiply;">
            <button class="wishlist-btn"><i class="far fa-heart"></i></button>
          </div>
          <div class="product-info" style="display: flex; flex-direction: column; flex-grow: 1;">
            <h3 class="product-title">Executive Leather Chair</h3>
            <div class="product-price">
              <span class="price-current">AED 550</span>
            </div>
            <button class="btn btn-primary add-to-cart-btn" style="width: 100%; margin-top: auto; justify-content: center;">Add to Cart</button>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Verified Dynamic Review System Section -->
  <section class="section-padding" style="background-color: hsl(var(--color-bg-base)); border-top: 1px solid hsl(var(--color-border));">
    <div class="container" style="max-width: 900px;">
      
      <!-- Review Header & Summary -->
      <div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: flex-start; margin-bottom: 40px; gap: 20px;">
        <div>
          <h2 style="font-size: 2rem; color: hsl(var(--color-text-dark)); margin-bottom: 8px;">Leave a Review</h2>
          <div style="display: flex; align-items: center; gap: 12px;">
            <div style="font-size: 2.5rem; font-weight: 700; color: hsl(var(--color-text-dark));">4.8</div>
            <div>
              <div style="color: #F59E0B; font-size: 1.2rem;">★★★★★</div>
              <div style="font-size: 0.9rem; color: hsl(var(--color-text-muted));">Based on 24 Verified Purchases</div>
            </div>
          </div>
        </div>
        
        <!-- Verification Gate Trigger -->
        <div style="background-color: hsl(var(--color-bg-light)); padding: 20px; border-radius: var(--radius-md); border: 1px solid hsl(var(--color-border)); min-width: 300px;">
          <h3 style="font-size: 1.1rem; margin-bottom: 8px; color: hsl(var(--color-text-dark));">Write a Review</h3>
          <p style="font-size: 0.85rem; color: hsl(var(--color-text-muted)); margin-bottom: 16px;">To prevent fake reviews, we only accept feedback from customers who have purchased this product.</p>
          
          <!-- Verification Form -->
          <div id="review-verification-form">
            <div style="margin-bottom: 12px;">
              <input type="text" id="verify-order-id" placeholder="Order ID (e.g. GW-10294)" class="form-input" style="width: 100%; padding: 10px; border-radius: 4px; border: 1px solid #ccc;">
            </div>
            <div style="margin-bottom: 12px;">
              <input type="email" id="verify-email" placeholder="Email Address" class="form-input" style="width: 100%; padding: 10px; border-radius: 4px; border: 1px solid #ccc;">
            </div>
            <button class="btn btn-primary" id="btn-verify-purchase" style="width: 100%;">Verify Purchase</button>
          </div>

          <!-- Actual Review Form (Hidden initially) -->
          <div id="review-submission-form" style="display: none;">
            <div style="padding: 10px; background-color: #DEF7EC; color: #03543F; border-radius: 4px; font-size: 0.85rem; margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
              <span>✔</span> <span>Purchase Verified! You can now review this item.</span>
            </div>
            <div style="margin-bottom: 12px; color: #F59E0B; font-size: 1.5rem; cursor: pointer;">
              ☆ ☆ ☆ ☆ ☆
            </div>
            <div style="margin-bottom: 12px;">
              <textarea placeholder="Tell us about the quality, delivery, and your overall experience..." class="form-input" rows="3" style="width: 100%; padding: 10px; border-radius: 4px; border: 1px solid #ccc;"></textarea>
            </div>
            <button class="btn btn-secondary" style="width: 100%; background-color: hsl(var(--color-text-dark)); color: white;">Submit Review</button>
          </div>

        </div>
      </div>

      <!-- Customer Reviews Feed -->
      <div style="display: flex; flex-direction: column; gap: 24px;">
        
        <!-- Mock Review 1 -->
        <div style="padding: 24px; background-color: white; border-radius: var(--radius-md); box-shadow: var(--shadow-sm); border: 1px solid hsl(var(--color-border));">
          <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
            <div style="display: flex; gap: 12px; align-items: center;">
              <div style="width: 40px; height: 40px; border-radius: 50%; background-color: hsl(var(--color-primary) / 0.1); color: hsl(var(--color-primary)); display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.2rem;">
                A
              </div>
              <div>
                <div style="font-weight: 700; color: hsl(var(--color-text-dark));">Ahmed T.</div>
                <div style="font-size: 0.8rem; color: #059669; display: flex; align-items: center; gap: 4px; margin-top: 2px;">
                  <span>✔</span> Verified B2B Buyer
                </div>
              </div>
            </div>
            <div style="color: #F59E0B; font-size: 1rem;">★★★★★</div>
          </div>
          <p style="color: hsl(var(--color-text-body)); font-size: 0.95rem; line-height: 1.6;">
            "We ordered 50 of these ergonomic chairs for our new corporate office in Dubai Internet City. The quality is exceptional for the wholesale price. Delivery was handled smoothly the very next day by the Great Wall logistics team. Highly recommended for bulk setups."
          </p>
          <div style="margin-top: 12px; font-size: 0.8rem; color: hsl(var(--color-text-muted));">Posted 2 weeks ago</div>
        </div>

        <!-- Mock Review 2 -->
        <div style="padding: 24px; background-color: white; border-radius: var(--radius-md); box-shadow: var(--shadow-sm); border: 1px solid hsl(var(--color-border));">
          <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
            <div style="display: flex; gap: 12px; align-items: center;">
              <div style="width: 40px; height: 40px; border-radius: 50%; background-color: hsl(var(--color-primary) / 0.1); color: hsl(var(--color-primary)); display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.2rem;">
                S
              </div>
              <div>
                <div style="font-weight: 700; color: hsl(var(--color-text-dark));">Sarah M.</div>
                <div style="font-size: 0.8rem; color: #059669; display: flex; align-items: center; gap: 4px; margin-top: 2px;">
                  <span>✔</span> Verified Buyer
                </div>
              </div>
            </div>
            <div style="color: #F59E0B; font-size: 1rem;">★★★★☆</div>
          </div>
          <p style="color: hsl(var(--color-text-body)); font-size: 0.95rem; line-height: 1.6;">
            "Bought this for my home office setup. The assembly was straightforward and the lumbar support is exactly what I needed for long hours. Only taking off one star because the box was slightly damaged, but the chair inside was perfectly fine."
          </p>
          <div style="margin-top: 12px; font-size: 0.8rem; color: hsl(var(--color-text-muted));">Posted 1 month ago</div>
        </div>

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
        Proceed to Secure Checkout
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


