<?php
$base_depth = 0;
$page_title = 'Physics Lab';
$page_desc  = 'Physics Laboratory – AUBHS & Jr. College. Precision instruments for SSC and HSC board practicals.';
require_once 'includes/header.php';
?>
<section class="page-hero">
  <div class="container"><div class="page-hero-content">
    <h1>Physics Laboratory</h1>
    <nav class="breadcrumb"><a href="<?php echo url('index.php'); ?>">Home</a><span class="separator">›</span><a href="<?php echo url('facilities.php'); ?>">Facilities</a><span class="separator">›</span><span class="current">Physics Lab</span></nav>
  </div></div>
</section>
<section class="section">
  <div class="container">
    <div class="about-grid reveal">
      <div class="about-content">
        <div class="section-header" style="text-align:left"><span class="section-tag">Science Facilities</span><h2 class="section-title">Modern <span>Physics Lab</span></h2><div class="section-divider" style="margin:0 0 20px"></div></div>
        <p>The Physics Laboratory at AUBHS is equipped with precision instruments for all experiments prescribed in the SSC and HSC Maharashtra State Board curriculum. We give students the confidence to understand abstract concepts by making them tangible through hands-on experimentation.</p>
        <p>With setups for optics, mechanics, electricity, magnetism and modern physics, our lab empowers students to explore the fundamental laws of nature through observation and experimentation.</p>
        <div class="about-points">
          <div class="about-point"><i class="fas fa-check-circle"></i> Optics Setup – Lenses, Prisms, Spectrometers</div>
          <div class="about-point"><i class="fas fa-check-circle"></i> Mechanics – Pulleys, Inclined Planes, Pendulums</div>
          <div class="about-point"><i class="fas fa-check-circle"></i> Electricity – Voltmeters, Ammeters, Rheostats</div>
          <div class="about-point"><i class="fas fa-check-circle"></i> Magnetism – Galvanometers, Bar Magnets</div>
          <div class="about-point"><i class="fas fa-check-circle"></i> All SSC &amp; HSC Experiments Covered</div>
          <div class="about-point"><i class="fas fa-check-circle"></i> Supervised by Expert Physics Teachers</div>
        </div>
      </div>
      <div class="about-image-wrap">
        <img src="https://images.unsplash.com/photo-1607013251379-e6eecfffe234?w=700&q=80" alt="Physics Laboratory">
        <div class="about-badge"><strong><i class="fas fa-atom"></i></strong><span>Precision Equipped</span></div>
      </div>
    </div>
  </div>
</section>
<section class="section bg-light">
  <div class="container">
    <div class="facilities-grid reveal">
      <div class="facility-card"><div class="facility-icon"><i class="fas fa-lightbulb"></i></div><h3>Optics</h3><p>Complete optics bench setup with lenses, prisms, mirrors and laser pointer for light experiments.</p></div>
      <div class="facility-card"><div class="facility-icon"><i class="fas fa-bolt"></i></div><h3>Electricity</h3><p>Full electrical circuit setups with voltmeters, ammeters, rheostats, galvanometers and power supplies.</p></div>
      <div class="facility-card"><div class="facility-icon"><i class="fas fa-wave-square"></i></div><h3>Mechanics</h3><p>Pulleys, inclined planes, spring balances, screw gauges and vernier callipers for mechanics experiments.</p></div>
      <div class="facility-card"><div class="facility-icon"><i class="fas fa-atom"></i></div><h3>Modern Physics</h3><p>Geiger–Müller counter and photoelectric effect apparatus for senior-level experiments.</p></div>
    </div>
  </div>
</section>
<?php require_once 'includes/footer.php'; ?>
