<?php /* Template Name: portfolio */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio - 3D Scroll Diagnostic</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/portfolio.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Outfit:wght@500;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script>window.themeUrl = '<?php echo get_template_directory_uri(); ?>';</script>
<?php wp_head(); ?>
</head>
<body>

  <!-- Sketchfab Iframe Background -->
  <div id="canvas-container">
    <iframe src="" id="api-frame" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" style="width: 100%; height: 100%; border: 0;"></iframe>
  </div>

  <!-- Side Progress Dots -->
  <div class="progress-nav" id="progress-nav">
    <div class="progress-dot active" data-index="0"></div>
    <div class="progress-dot" data-index="1"></div>
    <div class="progress-dot" data-index="2"></div>
    <div class="progress-dot" data-index="3"></div>
    <div class="progress-dot" data-index="4"></div>
  </div>

  <!-- Scrollable Overlay Content -->
  <main class="scroll-container">
    
    <section class="section header-section">
      <div class="header--container">
        <h2>Great Wall</h2>
      </div>
    </section>

    <section class="section cam-view-1">
      <div class="hero--container fade-content">
        <h3 class="subtitle">Always perform like a</h3>
        <h1 class="title">Pro</h1>
        <p class="description">
          Discover our most advanced furniture series yet: blazing fast setup, incredible comfort performance, superb build quality, and so much more.
        </p>
        <button class="btn-primary">Know more</button>
      </div>

      <!-- Feature Description Panel (Right Side) -->
      <div class="hero-features fade-content">
        <h4 class="features-header">Core Innovations</h4>
        <div class="feature-item">
          <span class="highlight-line"></span>
          <div class="feature-text">
            <h4>Dynamic Headrest</h4>
            <p>Auto-adjusting cranial support for ultimate focus.</p>
          </div>
        </div>
        <div class="feature-item">
          <span class="highlight-line"></span>
          <div class="feature-text">
            <h4>Adaptive Lumbar</h4>
            <p>Responsive mesh contouring to your exact spine curvature.</p>
          </div>
        </div>
        <div class="feature-item">
          <span class="highlight-line"></span>
          <div class="feature-text">
            <h4>Retractable Footrest</h4>
            <p>Instantly deployable for deep ergonomic relaxation.</p>
          </div>
        </div>
      </div>

      <!-- Scroll Indicator -->
      <div class="scroll-indicator fade-content">
        <div class="mouse"></div>
        <p>Scroll to Explore</p>
      </div>
    </section>

    <section class="section cam-view-3">
      <div class="power--container text-right fade-content">
        <h2 class="feature-title">Unmatched Comfort</h2>
        <p class="feature-desc">Engineered for endurance. Premium materials provide all-day support so you can focus on what matters.</p>
      </div>
    </section>

    <section class="section cam-view-4">
      <div class="autofocus--container text-left fade-content">
        <h2 class="feature-title">Precision Ergonomics</h2>
        <p class="feature-desc">Every angle is adjustable. Find your perfect seating position with our intuitive tension controls.</p>
      </div>
    </section>

    <section class="section cam-view-5">
      <div class="explore--container text-center fade-content">
        <h2 class="feature-title">Ready to Upgrade?</h2>
        <p class="feature-desc">Experience the difference of true wholesale premium quality.</p>
      </div>
    </section>

    <section class="section exit--container text-center">
      <button class="btn-secondary">View the Catalog</button>
    </section>

  </main>

  <!-- GSAP & ScrollTrigger -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  
  <!-- Sketchfab API -->
  <script type="text/javascript" src="https://static.sketchfab.com/api/sketchfab-viewer-1.12.1.js"></script>

  <!-- Custom Scripts -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/portfolio.js"></script>
<?php wp_footer(); ?>
</body>
</html>


