<?php
$base_depth = 0;
$page_title = 'Facilities';
$page_desc  = "Facilities – AUBHS & Jr. College. Infrastructure, labs, library and more.";
require_once 'includes/header.php';
?>
<section class="page-hero">
  <div class="container"><div class="page-hero-content">
    <h1>Our Facilities</h1>
    <nav class="breadcrumb" aria-label="breadcrumb">
      <a href="<?php echo url('index.php'); ?>">Home</a><span class="separator">›</span>
      <span class="current">Facilities</span>
    </nav>
  </div></div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-tag">World-Class Infrastructure</span>
      <h2 class="section-title">Facilities That <span>Inspire Learning</span></h2>
      <div class="section-divider"></div>
      <p class="section-desc">We continuously invest in providing our students with the best possible learning environment.</p>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:30px">
      <?php
      $facilities = [
        ['href'=>'infrastructure','icon'=>'fas fa-building','title'=>'Infrastructure','desc'=>'4-storey building with 40+ classrooms, auditorium, sports ground and modern administrative offices.','img'=>'https://images.unsplash.com/photo-1592280771190-3e2e4d571952?w=600&q=80'],
        ['href'=>'library','icon'=>'fas fa-book-open','title'=>'Library','desc'=>'10,000+ books, journals, newspapers and digital resources. Quiet reading space for all students.','img'=>'https://images.unsplash.com/photo-1509062522246-3755977927d7?w=600&q=80'],
        ['href'=>'chemistry-lab','icon'=>'fas fa-flask','title'=>'Chemistry Lab','desc'=>'Fully-equipped chemistry laboratory with modern apparatus for SSC and HSC practical experiments.','img'=>'https://images.unsplash.com/photo-1532094349884-543559891c56?w=600&q=80'],
        ['href'=>'physics-lab','icon'=>'fas fa-atom','title'=>'Physics Lab','desc'=>'Precision instruments for all SSC and HSC board physics practicals, with optics, mechanics and electricity setups.','img'=>'https://images.unsplash.com/photo-1607013251379-e6eecfffe234?w=600&q=80'],
        ['href'=>'computer-lab','icon'=>'fas fa-desktop','title'=>'Computer / ICT Lab','desc'=>'50+ computers with high-speed internet. Digital Library inaugurated on Dr. A.P.J. Abdul Kalam\'s birth anniversary.','img'=>'https://images.unsplash.com/photo-1518770660439-4636190af475?w=600&q=80'],
        ['href'=>'','icon'=>'fas fa-futbol','title'=>'Sports Ground','desc'=>'Multi-sport ground with cricket pitch, football field, kabaddi court and athletics track.','img'=>'https://images.unsplash.com/photo-1560523159-6b681a1e1852?w=600&q=80'],
      ];
      foreach ($facilities as $f): ?>
      <div class="program-card reveal">
        <div class="program-card-img"><img src="<?php echo $f['img']; ?>" alt="<?php echo $f['title']; ?>"></div>
        <div class="program-card-body">
          <h3><i class="<?php echo $f['icon']; ?>" style="color:var(--primary);margin-right:8px"></i> <?php echo $f['title']; ?></h3>
          <p><?php echo $f['desc']; ?></p>
          <?php if ($f['href']): ?>
          <a href="<?php echo url($f['href'].'.php'); ?>" class="btn btn-primary">Explore</a>
          <?php endif; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section bg-light">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-tag">Additional Amenities</span>
      <h2 class="section-title">More We <span>Offer</span></h2>
      <div class="section-divider"></div>
    </div>
    <div class="facilities-grid reveal">
      <div class="facility-card"><div class="facility-icon"><i class="fas fa-utensils"></i></div><h3>Canteen</h3><p>Hygienic canteen serving nutritious meals at affordable prices.</p></div>
      <div class="facility-card"><div class="facility-icon"><i class="fas fa-bus"></i></div><h3>Transport</h3><p>Safe transport services covering major routes in Mumbai.</p></div>
      <div class="facility-card"><div class="facility-icon"><i class="fas fa-camera"></i></div><h3>CCTV Surveillance</h3><p>24/7 CCTV monitoring for complete student safety on campus.</p></div>
      <div class="facility-card"><div class="facility-icon"><i class="fas fa-bolt"></i></div><h3>Power Backup</h3><p>Uninterrupted power supply with generator backup for all facilities.</p></div>
    </div>
  </div>
</section>
<?php require_once 'includes/footer.php'; ?>
