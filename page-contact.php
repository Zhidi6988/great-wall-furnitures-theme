<?php /* Template Name: contact */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Great Wall Furnitures</title>
  <meta name="description" content="Contact Great Wall Furnitures in Dubai for wholesale and retail inquiries.">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

  <!-- Top Navigation Header -->
  <header class="header transparent">
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
          <li><a href="<?php echo home_url('/contact/'); ?>" class="nav-link active">Contact</a></li>
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
          <i class="fas fa-shopping-cart" style="font-size: 1.2rem; color: white;"></i>
          <span class="badge-count" id="cart-count">0</span>
        </button>
      </div>
    </div>
  </header>

  <!-- Contact Banner (Image 1 style) -->
  <section class="shop-banner" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/img/contact_hero_banner.png'); text-align: right;">
    <div class="container">
      <h1 class="shop-banner-title">Contact Us</h1>
      <div class="breadcrumbs">
        <a href="<?php echo home_url('/'); ?>">Home</a> <span style="margin: 0 8px;">/</span> Contact
      </div>
    </div>
  </section>

  <!-- Contact Split Section -->
  <section class="section-padding" style="background-color: hsl(var(--color-bg-light)); min-height: 60vh;">
    <div class="container contact-split-grid">
      
      <!-- Left: Contact Information -->
      <div class="contact-info-panel">
        <h2 style="font-size: 1.8rem; margin-bottom: 30px; color: hsl(var(--color-text-dark));">Get in Touch</h2>
        
        <div class="contact-methods-list">
          <div class="contact-method">
            <div class="method-icon"><i class="fas fa-phone-alt"></i></div>
            <div class="method-text">
              <span class="method-label">Direct Line</span>
              <a href="tel:043202921" class="method-value highlight">04-3202921</a>
            </div>
          </div>
          
          <div class="contact-method">
            <div class="method-icon" style="background: rgba(37, 211, 102, 0.1); color: #25D366;"><i class="fab fa-whatsapp"></i></div>
            <div class="method-text">
              <span class="method-label">WhatsApp</span>
              <a href="https://wa.me/971501234567" target="_blank" class="method-value whatsapp-text">Chat with us directly</a>
            </div>
          </div>
          
          <div class="contact-method">
            <div class="method-icon"><i class="fas fa-envelope"></i></div>
            <div class="method-text">
              <span class="method-label">Email Us</span>
              <a href="mailto:info@greatwallfurniture.ae" class="method-value">info@greatwallfurniture.ae</a>
            </div>
          </div>
          
          <div class="contact-method">
            <div class="method-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div class="method-text">
              <span class="method-label">Office & Warehouse Address</span>
              <span class="method-value">Ras Al Khor Industrial Area 2<br>Dubai, United Arab Emirates</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: Inquiry Form (Glassmorphism) -->
      <div class="contact-form-panel">
        <div class="glass-form-container">
          <h3 style="color: white; margin-bottom: 24px; font-size: 1.5rem;">Send an Inquiry</h3>
          <form class="contact-form" action="#" method="POST">
            <div class="form-group">
              <label for="name">Your Name</label>
              <input type="text" id="name" name="name" required placeholder="John Doe">
            </div>
            
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" required placeholder="john@company.com">
            </div>
            
            <div class="form-group">
              <label for="subject">Subject / Inquiry Type</label>
              <select id="subject" name="subject">
                <option value="wholesale">Wholesale Order</option>
                <option value="product">Product Question</option>
                <option value="shipping">Delivery / Shipping</option>
                <option value="other">Other</option>
              </select>
            </div>
            
            <div class="form-group">
              <label for="message">Your Message</label>
              <textarea id="message" name="message" rows="5" required placeholder="How can we help you?"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center; font-size: 1.1rem; padding: 14px; background: white; color: #F23D42;">Send Message</button>
          </form>
        </div>
      </div>

    </div>
  </section>

  <!-- FAQ Section -->
  <section class="section-padding" style="background-color: hsl(var(--color-bg-warm));">
    <div class="container" style="max-width: 800px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; color: hsl(var(--color-text-dark)); margin-bottom: 12px;">Frequently Asked Questions</h2>
        <p style="color: hsl(var(--color-text-muted)); font-size: 1.1rem;">Quick answers to common inquiries about orders, shipping, and wholesale.</p>
      </div>
      
      <div class="faq-accordion" style="display: flex; flex-direction: column; gap: 16px;">
        <!-- FAQ Item 1 -->
        <div class="faq-item" style="border: 1px solid hsl(var(--color-border)); border-radius: 12px; padding: 24px; background: white;">
          <h4 style="font-size: 1.1rem; color: hsl(var(--color-text-dark)); margin-bottom: 12px; display: flex; align-items: center; justify-content: space-between;">
            What is the minimum order quantity for wholesale pricing?
          </h4>
          <p style="color: hsl(var(--color-text-muted)); line-height: 1.6;">
            Wholesale pricing automatically kicks in for orders of 10 units or more. For ultra-bulk orders (50+ units), please contact us directly via WhatsApp or Phone for custom quotes.
          </p>
        </div>
        
        <!-- FAQ Item 2 -->
        <div class="faq-item" style="border: 1px solid hsl(var(--color-border)); border-radius: 12px; padding: 24px; background: white;">
          <h4 style="font-size: 1.1rem; color: hsl(var(--color-text-dark)); margin-bottom: 12px; display: flex; align-items: center; justify-content: space-between;">
            How fast is your delivery within Dubai?
          </h4>
          <p style="color: hsl(var(--color-text-muted)); line-height: 1.6;">
            Because our warehouse is located directly in Ras Al Khor, we guarantee next-day dispatch for all items currently in stock. Same-day delivery is available for early morning orders.
          </p>
        </div>
        
        <!-- FAQ Item 3 -->
        <div class="faq-item" style="border: 1px solid hsl(var(--color-border)); border-radius: 12px; padding: 24px; background: white;">
          <h4 style="font-size: 1.1rem; color: hsl(var(--color-text-dark)); margin-bottom: 12px; display: flex; align-items: center; justify-content: space-between;">
            Can I visit the warehouse to test the chairs?
          </h4>
          <p style="color: hsl(var(--color-text-muted)); line-height: 1.6;">
            Absolutely! Our direct-to-consumer showroom is attached to our warehouse. You are welcome to visit during our working hours (Mon-Sat, 9 AM - 7 PM) to test any of our ergonomic chairs before purchasing.
          </p>
        </div>
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

  <!-- Contact & Warehouse Location Info (Immersive Map) -->
  <section class="immersive-map-section">
    <div class="map-background" style="background-image: url('assets/img/dubai_warehouse_map.png');"></div>
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

  <!-- Footer -->
  <footer class="footer">
    <div class="container footer-grid">
      <div class="footer-col">
        <div class="logo">
          Great Wall<span>Furnitures</span>
        </div>
        <p style="margin-top: 16px; font-size: 14px; opacity: 0.8;">
          Your trusted wholesale partner for office and home furniture in Dubai. Fast delivery, unbeatable prices.
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

</body>
</html>


