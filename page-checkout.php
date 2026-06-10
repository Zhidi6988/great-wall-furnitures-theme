<?php /* Template Name: checkout */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout | Great Wall Furnitures</title>
  <meta name="description" content="Secure checkout for your wholesale furniture order.">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
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

  <main style="padding: 120px 0 60px 0; background-color: hsl(var(--color-bg-warm)); min-height: 100vh;">
    <div class="container">
      <h1 style="font-size: 32px; margin-bottom: 30px;">Secure Checkout</h1>
      
      <div style="display: grid; grid-template-columns: 1fr 400px; gap: 40px; align-items: start;">
        
        <!-- Checkout Form -->
        <div style="background: white; border-radius: var(--radius-lg); padding: 30px; box-shadow: var(--shadow-sm); border: 1px solid hsl(var(--color-border));">
          <h2 style="font-size: 20px; margin-bottom: 20px; border-bottom: 1px solid hsl(var(--color-border)); padding-bottom: 10px;">Shipping & Contact Info</h2>
          <form id="checkout-form">
            <div style="margin-bottom: 20px;">
              <label for="co-name" style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Full Name *</label>
              <input type="text" id="co-name" required placeholder="John Doe" style="width: 100%; padding: 12px; border: 1px solid hsl(var(--color-border)); border-radius: var(--radius-sm); font-size: 15px;">
            </div>
            
            <div style="margin-bottom: 20px;">
              <label for="co-phone" style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Mobile Number (+971) *</label>
              <input type="tel" id="co-phone" required placeholder="50 123 4567" style="width: 100%; padding: 12px; border: 1px solid hsl(var(--color-border)); border-radius: var(--radius-sm); font-size: 15px;">
            </div>

            <div style="margin-bottom: 20px;">
              <label for="co-address" style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Delivery Address (Dubai only) *</label>
              <textarea id="co-address" required placeholder="Building name, street, area (e.g. Al Barsha)" style="width: 100%; padding: 12px; border: 1px solid hsl(var(--color-border)); border-radius: var(--radius-sm); font-size: 15px; min-height: 80px; resize: vertical;"></textarea>
            </div>

            <h2 style="font-size: 20px; margin-top: 40px; margin-bottom: 20px; border-bottom: 1px solid hsl(var(--color-border)); padding-bottom: 10px;">Payment Method</h2>
            <div style="padding: 16px; border: 1px solid hsl(var(--color-primary)); background-color: hsl(var(--color-primary) / 0.05); border-radius: var(--radius-sm); display: flex; align-items: center; gap: 12px;">
              <input type="radio" id="pay-cod" name="payment" checked style="accent-color: hsl(var(--color-primary)); transform: scale(1.2);">
              <label for="pay-cod" style="font-weight: 600; cursor: pointer;">Cash on Delivery (COD)</label>
            </div>
            <p style="font-size: 13px; color: hsl(var(--color-text-muted)); margin-top: 10px; margin-bottom: 30px;">
              Pay via cash or card terminal upon delivery. Zero upfront fees.
            </p>

            <button type="submit" id="place-order-btn" class="btn btn-primary" style="width: 100%; padding: 16px; font-size: 18px; justify-content: center;">Place Order</button>
          </form>
        </div>

        <!-- Order Summary -->
        <div style="background: hsl(var(--color-bg-card)); border-radius: var(--radius-lg); padding: 30px; border: 1px solid hsl(var(--color-border)); position: sticky; top: 100px;">
          <h2 style="font-size: 20px; margin-bottom: 20px; border-bottom: 1px solid hsl(var(--color-border)); padding-bottom: 10px;">Order Summary</h2>
          
          <div id="checkout-summary" style="margin-bottom: 24px; max-height: 300px; overflow-y: auto;">
            <!-- Cart items populated here by JS -->
          </div>

          <div style="display: flex; justify-content: space-between; margin-bottom: 12px; font-size: 14px;">
            <span style="color: hsl(var(--color-text-muted));">Subtotal</span>
            <span id="checkout-subtotal" style="font-weight: 600;">AED 0</span>
          </div>
          <div style="display: flex; justify-content: space-between; margin-bottom: 16px; font-size: 14px;">
            <span style="color: hsl(var(--color-text-muted));">Shipping</span>
            <span id="checkout-shipping" style="font-weight: 600;">AED 0</span>
          </div>

          <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid hsl(var(--color-border)); padding-top: 16px; font-size: 18px; font-weight: 800;">
            <span>Total</span>
            <span id="checkout-total" style="color: hsl(var(--color-primary));">AED 0</span>
          </div>
        </div>

      </div>
    </div>
  </main>

  <footer class="footer">
    <div class="container" style="text-align: center; color: white;">
      <p>&copy; 2026 Great Wall Furnitures Trading LLC. All rights reserved.</p>
    </div>
  </footer>

  <!-- Drawer overlay & drawer html -->
  <div class="cart-overlay" id="cart-overlay"></div>
  <div class="cart-drawer" id="cart-drawer">
    <div class="cart-header">
      <h3>Your Cart <span id="cart-item-count">(0)</span></h3>
      <button class="icon-btn" id="close-cart">âœ•</button>
    </div>
    <div class="cart-items" id="cart-items"></div>
    <div class="cart-footer">
      <div class="cart-total">
        <span>Total:</span>
        <span id="cart-total-amount">AED 0</span>
      </div>
      <button class="btn btn-primary" onclick="checkout()" style="width: 100%; justify-content: center;">Proceed to Checkout</button>
    </div>
  </div>

  <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
</body>
</html>


