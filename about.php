<?php
$base_depth = 0;
$page_title = 'About Us';
$page_desc  = 'About Anglo Urdu Boys High School & Jr. College';
require_once 'includes/header.php';
?>

<section class="page-hero">
  <div class="container"><div class="page-hero-content">
    <h1>About Us</h1>
    <nav class="breadcrumb">
      <a href="<?php echo url('index.php'); ?>">Home</a>
      <span class="separator">›</span>
      <span class="current">About Us</span>
    </nav>
  </div></div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-tag">Who We Are</span>
      <h2 class="section-title">About <span>AUBHS</span></h2>
      <div class="section-divider"></div>
      <p class="section-desc">A premier educational institution in Mumbai, committed to nurturing young minds with traditional values and modern technology.</p>
    </div>
    
    <div class="programs-grid" style="margin-top: 40px;">
      
      <div class="program-card reveal">
        <div class="program-card-img">
          <img src="<?php echo url('assets/images/faculty/inamdar-sir.jpg'); ?>" alt="President Message">
        </div>
        <div class="program-card-body" style="text-align: center;">
          <h3>President's Message</h3>
          <p>Read the inspiring message from our honorable President Dr. P. A. Inamdar.</p>
          <a href="<?php echo url('president-message.php'); ?>" class="btn btn-primary" style="margin-top: 15px;">Read Message</a>
        </div>
      </div>
      
      <div class="program-card reveal">
        <div class="program-card-img">
          <img src="<?php echo url('assets/images/faculty/Mrs%20Parveen%20Z.%20Shaikh.jpeg'); ?>" alt="Principal Message">
        </div>
        <div class="program-card-body" style="text-align: center;">
          <h3>Principal's Message</h3>
          <p>A welcome note and vision from our Principal, Mrs. Parveen Z. Shaikh.</p>
          <a href="<?php echo url('principal-message.php'); ?>" class="btn btn-primary" style="margin-top: 15px;">Read Message</a>
        </div>
      </div>
      
      <div class="program-card reveal">
        <div class="program-card-img">
          <img src="<?php echo url('assets/images/real/about-img.jpg'); ?>" alt="Mission and Vision" style="object-fit: cover;">
        </div>
        <div class="program-card-body" style="text-align: center;">
          <h3>Mission & Vision</h3>
          <p>Discover our core philosophy, educational mission, and long-term vision.</p>
          <a href="<?php echo url('mission-vision.php'); ?>" class="btn btn-primary" style="margin-top: 15px;">Learn More</a>
        </div>
      </div>
      
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
