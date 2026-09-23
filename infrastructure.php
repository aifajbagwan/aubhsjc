<?php
$base_depth = 0;
$page_title = 'Infrastructure';
$page_desc  = 'Infrastructure – AUBHS & Jr. College. Modern campus, classrooms, auditorium and sports facilities.';
require_once 'includes/header.php';
?>
<section class="page-hero">
  <div class="container"><div class="page-hero-content">
    <h1>Infrastructure</h1>
    <nav class="breadcrumb"><a href="<?php echo url('index.php'); ?>">Home</a><span class="separator">›</span><a href="<?php echo url('facilities.php'); ?>">Facilities</a><span class="separator">›</span><span class="current">Infrastructure</span></nav>
  </div></div>
</section>
<section class="section">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-tag">Our Campus</span>
      <h2 class="section-title">Modern <span>Infrastructure</span></h2>
      <div class="section-divider"></div>
      <p class="section-desc">Our campus is a hub of learning and activity, designed to inspire and support students at every step of their educational journey.</p>
    </div>
    <div class="gallery-grid reveal" style="margin-bottom:50px">
      <div class="gallery-item"><img src="<?php echo url('assets/images/real/image-33-1024x555.jpg'); ?>" alt="AUBHS Campus" loading="lazy"><div class="gallery-overlay"><i class="fas fa-search-plus"></i></div></div>
      <div class="gallery-item"><img src="<?php echo url('assets/images/real/image-34-1024x555.jpg'); ?>" alt="School Building" loading="lazy"><div class="gallery-overlay"><i class="fas fa-search-plus"></i></div></div>
      <div class="gallery-item"><img src="<?php echo url('assets/images/real/image-35-1024x555.jpg'); ?>" alt="Campus View" loading="lazy"><div class="gallery-overlay"><i class="fas fa-search-plus"></i></div></div>
    </div>
    <div class="facilities-grid">
      <?php
      $infra = [
        ['icon'=>'fas fa-building','title'=>'Main Building','desc'=>'A multi-storey building with 40+ classrooms, administrative offices, staffrooms and common areas.'],
        ['icon'=>'fas fa-chalkboard','title'=>'Smart Classrooms','desc'=>'All classrooms equipped with projectors, smart boards and audio systems for digital-first teaching.'],
        ['icon'=>'fas fa-theater-masks','title'=>'Auditorium','desc'=>'Spacious auditorium for cultural events, seminars, prize distribution and annual day celebrations.'],
        ['icon'=>'fas fa-futbol','title'=>'Sports Ground','desc'=>'Multi-sport ground with cricket pitch, football field, kabaddi court and athletics track.'],
        ['icon'=>'fas fa-restroom','title'=>'Clean Washrooms','desc'=>'Well-maintained separate washrooms for boys, girls and staff on every floor.'],
        ['icon'=>'fas fa-camera','title'=>'CCTV Surveillance','desc'=>'24/7 CCTV monitoring across all campus areas for student safety and security.'],
        ['icon'=>'fas fa-bolt','title'=>'Power Backup','desc'=>'Uninterrupted power supply with generator backup ensuring zero downtime for all facilities.'],
        ['icon'=>'fas fa-parking','title'=>'Parking','desc'=>'Ample parking space for staff vehicles and designated areas for student bicycles.'],
      ];
      foreach ($infra as $i): ?>
      <div class="facility-card reveal"><div class="facility-icon"><i class="<?php echo $i['icon']; ?>"></i></div><h3><?php echo $i['title']; ?></h3><p><?php echo $i['desc']; ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php require_once 'includes/footer.php'; ?>
