<?php
$base_depth = 0;
$page_title = 'Computer & ICT Lab';
$page_desc  = 'Computer & ICT Laboratory – AUBHS & Jr. College. 50+ computers, Digital Library and high-speed internet.';
require_once 'includes/header.php';
?>
<section class="page-hero">
  <div class="container"><div class="page-hero-content">
    <h1>Computer &amp; ICT Laboratory</h1>
    <nav class="breadcrumb"><a href="<?php echo url('index.php'); ?>">Home</a><span class="separator">›</span><a href="<?php echo url('facilities.php'); ?>">Facilities</a><span class="separator">›</span><span class="current">Computer Lab</span></nav>
  </div></div>
</section>
<section class="section">
  <div class="container">
    <div class="about-grid reveal">
      <div class="about-image-wrap">
        <img src="<?php echo url('assets/images/real/Activity-1A.jpg'); ?>" onerror="this.src='https://images.unsplash.com/photo-1518770660439-4636190af475?w=700&q=80'" alt="Computer Lab">
        <div class="about-badge"><strong>50+</strong><span>Computers</span></div>
      </div>
      <div class="about-content">
        <div class="section-header" style="text-align:left">
          <span class="section-tag">ICT &amp; Digital Learning</span>
          <h2 class="section-title">Computer &amp; <span>ICT Lab</span></h2>
          <div class="section-divider" style="margin:0 0 20px"></div>
        </div>
        
        <blockquote class="mission-quote" style="font-size:18px; margin-bottom: 25px;">
          <i class="fas fa-quote-left"></i>
          <p>"The Computer was born to solve a problem that did not exist before;"</p>
        </blockquote>

        <h3 style="font-family:'Montserrat',sans-serif;font-size:20px;font-weight:700;color:var(--dark);margin-bottom:15px;">Facilities of the Lab:</h3>
        <ul style="list-style:none;padding:0; margin-bottom: 30px;">
          <li style="padding:10px 0;border-bottom:1px solid #eee;font-size:15px;display:flex;gap:12px; color:var(--text);"><i class="fas fa-check-circle" style="color:var(--primary);margin-top:4px;min-width:18px"></i> School is providing, the Internet enables computer lab with over 3 computers to meet the students &amp; Information Technology needs.</li>
          <li style="padding:10px 0;border-bottom:1px solid #eee;font-size:15px;display:flex;gap:12px; color:var(--text);"><i class="fas fa-check-circle" style="color:var(--primary);margin-top:4px;min-width:18px"></i> Trained and experienced teachers provide both theoretical and practical lessons for students to help them navigate a rapidly changing technology-driven world.</li>
          <li style="padding:10px 0;border-bottom:1px solid #eee;font-size:15px;display:flex;gap:12px; color:var(--text);"><i class="fas fa-check-circle" style="color:var(--primary);margin-top:4px;min-width:18px"></i> There are a variety of specialized educational programs also installed in the computers.</li>
          <li style="padding:10px 0;font-size:15px;display:flex;gap:12px; color:var(--text);"><i class="fas fa-check-circle" style="color:var(--primary);margin-top:4px;min-width:18px"></i> Students may work in the lab on subject-related projects, under the supervision of respective subject teachers.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section bg-light">
  <div class="container">
    <div style="background:#fff;border-radius:12px;padding:45px;box-shadow:0 5px 25px rgba(0,0,0,0.08); max-width:800px; margin:0 auto;" class="reveal">
      <h3 style="font-family:'Montserrat',sans-serif;font-size:22px;font-weight:700;color:var(--dark);margin-bottom:20px;padding-bottom:15px;border-bottom:2px solid var(--secondary)">
        <i class="fas fa-list-ul" style="color:var(--secondary);margin-right:12px"></i> Computer Lab Rules &amp; Regulations
      </h3>
      <p style="font-size:15px; color:var(--text-light); margin-bottom: 25px;">All students are required to adhere to the following Computer Lab rules below in order to maintain the integrity of the equipment in a clean and orderly environment.</p>
      
      <div style="display:grid; gap:15px;">
        <div style="display:flex; align-items:flex-start; gap:15px; padding:15px; background:var(--light-2); border-radius:8px;">
          <div style="color:var(--secondary); font-size:20px; margin-top:2px;"><i class="fas fa-user-check"></i></div>
          <div style="font-size:15px; font-weight:600; color:var(--dark);">Strict discipline to be followed.</div>
        </div>
        <div style="display:flex; align-items:flex-start; gap:15px; padding:15px; background:var(--light-2); border-radius:8px;">
          <div style="color:var(--secondary); font-size:20px; margin-top:2px;"><i class="fas fa-hamburger"></i></div>
          <div style="font-size:15px; font-weight:600; color:var(--dark);">No eating, drinking, or chewing gum in the computer lab.</div>
        </div>
        <div style="display:flex; align-items:flex-start; gap:15px; padding:15px; background:var(--light-2); border-radius:8px;">
          <div style="color:var(--secondary); font-size:20px; margin-top:2px;"><i class="fas fa-globe"></i></div>
          <div style="font-size:15px; font-weight:600; color:var(--dark);">No surfing the Internet or going to unauthorized sites in the lab.</div>
        </div>
        <div style="display:flex; align-items:flex-start; gap:15px; padding:15px; background:var(--light-2); border-radius:8px;">
          <div style="color:var(--secondary); font-size:20px; margin-top:2px;"><i class="fas fa-gamepad"></i></div>
          <div style="font-size:15px; font-weight:600; color:var(--dark);">No game playing is allowed in the lab.</div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require_once 'includes/footer.php'; ?>
