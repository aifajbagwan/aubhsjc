<?php
$base_depth = 0;
$page_title = 'Chemistry Lab';
$page_desc  = 'Chemistry Laboratory – AUBHS & Jr. College. Fully-equipped lab for SSC and HSC practicals.';
require_once 'includes/header.php';
?>
<section class="page-hero">
  <div class="container"><div class="page-hero-content">
    <h1>Chemistry Laboratory</h1>
    <nav class="breadcrumb"><a href="<?php echo url('index.php'); ?>">Home</a><span class="separator">›</span><a href="<?php echo url('facilities.php'); ?>">Facilities</a><span class="separator">›</span><span class="current">Chemistry Lab</span></nav>
  </div></div>
</section>
<section class="section">
  <div class="container">
    <div class="about-grid reveal">
      <div class="about-image-wrap">
        <img src="https://images.unsplash.com/photo-1532094349884-543559891c56?w=700&q=80" alt="Chemistry Laboratory">
        <div class="about-badge"><strong><i class="fas fa-flask"></i></strong><span>Fully Equipped</span></div>
      </div>
      <div class="about-content">
        <div class="section-header" style="text-align:left"><span class="section-tag">Science Facilities</span><h2 class="section-title">Modern <span>Chemistry Lab</span></h2><div class="section-divider" style="margin:0 0 20px"></div></div>
        <p>Our chemistry laboratory is a state-of-the-art facility designed to provide students with a safe, modern and fully equipped environment for practical learning. We believe hands-on experimentation is the cornerstone of science education.</p>
        <p>The lab is spacious enough to accommodate a full batch of students simultaneously, with individual workstations for each student. All experiments prescribed in the SSC and HSC Maharashtra Board curriculum are fully supported here.</p>
        <div class="about-points">
          <div class="about-point"><i class="fas fa-check-circle"></i> Individual Workstations</div>
          <div class="about-point"><i class="fas fa-check-circle"></i> Modern Apparatus &amp; Glassware</div>
          <div class="about-point"><i class="fas fa-check-circle"></i> Fire Extinguisher &amp; Eyewash Station</div>
          <div class="about-point"><i class="fas fa-check-circle"></i> Fume Hood Available</div>
          <div class="about-point"><i class="fas fa-check-circle"></i> SSC &amp; HSC Experiments Covered</div>
          <div class="about-point"><i class="fas fa-check-circle"></i> Expert Lab Assistant on Duty</div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section bg-light">
  <div class="container">
    <div class="section-header reveal"><span class="section-tag">Lab Highlights</span><h2 class="section-title">Lab <span>Features</span></h2><div class="section-divider"></div></div>
    <div class="facilities-grid reveal">
      <div class="facility-card"><div class="facility-icon"><i class="fas fa-flask"></i></div><h3>Chemicals Stock</h3><p>Comprehensive stock of all chemicals required for SSC and HSC board practicals, stored safely.</p></div>
      <div class="facility-card"><div class="facility-icon"><i class="fas fa-microscope"></i></div><h3>Modern Equipment</h3><p>All modern glassware, burners, centrifuges and measuring instruments available for practicals.</p></div>
      <div class="facility-card"><div class="facility-icon"><i class="fas fa-shield-alt"></i></div><h3>Safety First</h3><p>Fire extinguisher, eyewash station, safety goggles, gloves and first aid provided to all students.</p></div>
      <div class="facility-card"><div class="facility-icon"><i class="fas fa-user-check"></i></div><h3>Expert Lab Staff</h3><p>Qualified lab assistants and chemistry teachers supervise all practical sessions.</p></div>
    </div>
  </div>
</section>
<?php require_once 'includes/footer.php'; ?>
