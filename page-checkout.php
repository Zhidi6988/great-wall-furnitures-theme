<?php /* Template Name: checkout */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout | Great Wall Furnitures</title>
  <meta name="description" content="Secure checkout for your wholesale furniture order.">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script>window.themeUrl = '<?php echo get_template_directory_uri(); ?>';</script>
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
            
            <!-- COD Option -->
            <div class="payment-option" id="option-cod" style="padding: 16px; border: 1px solid hsl(var(--color-primary)); background-color: hsl(var(--color-primary) / 0.05); border-radius: var(--radius-sm); margin-bottom: 12px; cursor: pointer; transition: all 0.3s ease;">
              <div style="display: flex; align-items: center; gap: 12px;">
                <input type="radio" id="pay-cod" name="payment" value="cod" checked style="accent-color: hsl(var(--color-primary)); transform: scale(1.2); pointer-events: none;">
                <label for="pay-cod" style="font-weight: 600; cursor: pointer; pointer-events: none;">Cash on Delivery (COD)</label>
              </div>
              <p style="font-size: 13px; color: hsl(var(--color-text-muted)); margin-top: 10px; margin-left: 28px;">
                Pay via cash or card terminal upon delivery. Zero upfront fees.
              </p>
            </div>

            <!-- Online Payment Option -->
            <div class="payment-option" id="option-card" style="padding: 16px; border: 1px solid hsl(var(--color-border)); border-radius: var(--radius-sm); margin-bottom: 30px; cursor: pointer; transition: all 0.3s ease;">
              <div style="display: flex; align-items: center; gap: 12px; justify-content: space-between;">
                <div style="display: flex; align-items: center; gap: 12px;">
                  <input type="radio" id="pay-card" name="payment" value="card" style="accent-color: hsl(var(--color-primary)); transform: scale(1.2); pointer-events: none;">
                  <label for="pay-card" style="font-weight: 600; cursor: pointer; pointer-events: none;">Credit / Debit Card</label>
                </div>
                <div style="display: flex; gap: 6px; color: hsl(var(--color-text-muted)); font-size: 20px;">
                  <i class="fab fa-cc-visa"></i>
                  <i class="fab fa-cc-mastercard"></i>
                  <i class="fab fa-cc-amex"></i>
                </div>
              </div>
              
              <!-- Mock Credit Card Form (Hidden by default) -->
              <div id="card-form-container" style="display: none; margin-top: 20px; margin-left: 28px; padding-top: 20px; border-top: 1px solid hsl(var(--color-border));">
                <div style="margin-bottom: 16px;">
                  <label for="cc-name" style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 6px;">Name on Card</label>
                  <input type="text" id="cc-name" placeholder="John Doe" style="width: 100%; padding: 10px; border: 1px solid hsl(var(--color-border)); border-radius: var(--radius-sm); font-size: 14px;">
                </div>
                <div style="margin-bottom: 16px;">
                  <label for="cc-number" style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 6px;">Card Number</label>
                  <div style="position: relative;">
                    <input type="text" id="cc-number" placeholder="0000 0000 0000 0000" maxlength="19" style="width: 100%; padding: 10px 10px 10px 36px; border: 1px solid hsl(var(--color-border)); border-radius: var(--radius-sm); font-size: 14px;">
                    <i class="far fa-credit-card" style="position: absolute; left: 12px; top: 50%; transform: translateY(-50%); color: hsl(var(--color-text-muted));"></i>
                  </div>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                  <div>
                    <label for="cc-exp" style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 6px;">Expiry (MM/YY)</label>
                    <input type="text" id="cc-exp" placeholder="MM/YY" maxlength="5" style="width: 100%; padding: 10px; border: 1px solid hsl(var(--color-border)); border-radius: var(--radius-sm); font-size: 14px;">
                  </div>
                  <div>
                    <label for="cc-cvc" style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 6px;">CVC</label>
                    <input type="text" id="cc-cvc" placeholder="123" maxlength="4" style="width: 100%; padding: 10px; border: 1px solid hsl(var(--color-border)); border-radius: var(--radius-sm); font-size: 14px;">
                  </div>
                </div>
              </div>
            </div>

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
      <button class="icon-btn" id="close-cart">✖</button>
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
  
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const optionCod = document.getElementById('option-cod');
      const optionCard = document.getElementById('option-card');
      const radioCod = document.getElementById('pay-cod');
      const radioCard = document.getElementById('pay-card');
      const cardForm = document.getElementById('card-form-container');

      function updatePaymentUI() {
        if (radioCod.checked) {
          optionCod.style.borderColor = 'hsl(var(--color-primary))';
          optionCod.style.backgroundColor = 'hsl(var(--color-primary) / 0.05)';
          optionCard.style.borderColor = 'hsl(var(--color-border))';
          optionCard.style.backgroundColor = 'transparent';
          cardForm.style.display = 'none';
        } else {
          optionCard.style.borderColor = 'hsl(var(--color-primary))';
          optionCard.style.backgroundColor = 'hsl(var(--color-primary) / 0.05)';
          optionCod.style.borderColor = 'hsl(var(--color-border))';
          optionCod.style.backgroundColor = 'transparent';
          cardForm.style.display = 'block';
        }
      }

      optionCod.addEventListener('click', () => {
        radioCod.checked = true;
        updatePaymentUI();
      });

      optionCard.addEventListener('click', () => {
        radioCard.checked = true;
        updatePaymentUI();
      });
      
      // Auto-format card number
      const ccNum = document.getElementById('cc-number');
      if(ccNum) {
        ccNum.addEventListener('input', function (e) {
          let value = e.target.value.replace(/\D/g, '').substring(0,16);
          let formattedValue = value != '' ? value.match(/.{1,4}/g).join(' ') : '';
          e.target.value = formattedValue;
        });
      }
      
      // Auto-format expiry
      const ccExp = document.getElementById('cc-exp');
      if(ccExp) {
        ccExp.addEventListener('input', function (e) {
          let value = e.target.value.replace(/\D/g, '').substring(0,4);
          if (value.length >= 2) {
            value = value.substring(0,2) + '/' + value.substring(2);
          }
          e.target.value = value;
        });
      }
    });
  </script>
<?php wp_footer(); ?>
</body>
</html>








