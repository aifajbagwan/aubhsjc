<?php
$base_depth = 0;
$page_title = 'Gallery';
$page_desc  = 'Gallery – AUBHS & Jr. College. School events, campus life, prize distribution and more.';
require_once 'includes/header.php';

// Real gallery images downloaded from aubhsjc.com
$real_img = 'assets/images/real/';
$gallery = [
    ['src' => $real_img.'WhatsApp-Image-2020-12-28-at-1.32.11-PM-2-1024x682.jpeg', 'title' => 'Prize Distribution Ceremony', 'cat' => 'events'],
    ['src' => $real_img.'Activity-1A.jpg', 'title' => 'School Activity', 'cat' => 'events'],
    ['src' => $real_img.'Activity-1B-1.jpg', 'title' => 'Student Activity', 'cat' => 'events'],
    ['src' => $real_img.'Activity-2A.jpg', 'title' => 'Annual Event', 'cat' => 'events'],
    ['src' => $real_img.'Activity-2B-2-1024x768.jpg', 'title' => 'School Programme', 'cat' => 'events'],
    ['src' => $real_img.'Activity-3A.jpg', 'title' => 'Cultural Activity', 'cat' => 'cultural'],
    ['src' => $real_img.'Activity-4A-1024x470.jpg', 'title' => 'School Function', 'cat' => 'cultural'],
    ['src' => $real_img.'Activity-5A-1024x682.jpg', 'title' => 'Annual Day', 'cat' => 'cultural'],
    ['src' => $real_img.'Activity-6C-1024x682.jpg', 'title' => 'Cultural Programme', 'cat' => 'cultural'],
    ['src' => $real_img.'Activity-7B-1024x768.jpg', 'title' => 'Celebration', 'cat' => 'cultural'],
    ['src' => $real_img.'Sport-Activity-2A-1024x1024.jpg', 'title' => 'Sports Activity', 'cat' => 'sports'],
    ['src' => $real_img.'Sports-9B.jpg', 'title' => 'Sports Day', 'cat' => 'sports'],
    ['src' => $real_img.'IMG-20190716-WA0006-1024x768.jpg', 'title' => 'School Event 2019', 'cat' => 'events'],
    ['src' => $real_img.'IMG-20190804-WA0001-1024x768.jpg', 'title' => 'Student Event', 'cat' => 'events'],
    ['src' => $real_img.'IMG-20190809-WA0007-1024x768.jpg', 'title' => 'Campus Activity', 'cat' => 'campus'],
    ['src' => $real_img.'WhatsApp-Image-2020-12-28-at-1.34.02-PM-1024x682.jpeg', 'title' => 'School Gathering', 'cat' => 'events'],
    ['src' => $real_img.'WhatsApp-Image-2020-03-07-at-2.53.09-PM-1-1024x470.jpeg', 'title' => 'School Event 2020', 'cat' => 'events'],
    ['src' => $real_img.'WhatsApp-Image-2020-03-07-at-3.38.57-PM-1024x682.jpeg', 'title' => 'Campus Life', 'cat' => 'campus'],
    ['src' => $real_img.'123-1024x768.jpg', 'title' => 'School Activities', 'cat' => 'campus'],
];
?>

<section class="page-hero">
  <div class="container"><div class="page-hero-content">
    <h1>Gallery</h1>
    <nav class="breadcrumb" aria-label="breadcrumb">
      <a href="<?php echo url('index.php'); ?>">Home</a>
      <span class="separator">›</span>
      <span class="current">Gallery</span>
    </nav>
  </div></div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-tag">School Life</span>
      <h2 class="section-title">Our Photo <span>Gallery</span></h2>
      <div class="section-divider"></div>
      <p class="section-desc">Glimpses of life at AUBHS — prize distributions, tree plantation drives, cultural events, computer labs, sports and more.</p>
    </div>

    <!-- Filter Buttons -->
    <div class="gallery-filters reveal" style="text-align:center;margin-bottom:35px">
      <button class="filter-btn active" data-filter="all">ALL</button>
      <button class="filter-btn" data-filter="campus">Campus</button>
      <button class="filter-btn" data-filter="events">Events</button>
      <button class="filter-btn" data-filter="labs">Labs &amp; Library</button>
      <button class="filter-btn" data-filter="sports">Sports</button>
      <button class="filter-btn" data-filter="cultural">Cultural</button>
    </div>

    <!-- Gallery Grid -->
    <div class="gallery-grid reveal" id="galleryGrid">
      <?php foreach ($gallery as $img):
        $src = (strpos($img['src'],'http')===0) ? $img['src'] : url($img['src']);
      ?>
      <div class="gallery-item" data-cat="<?php echo $img['cat']; ?>">
        <img src="<?php echo $src; ?>" alt="<?php echo htmlspecialchars($img['title']); ?>" loading="lazy">
        <div class="gallery-overlay">
          <a href="<?php echo $src; ?>" class="gallery-lightbox" data-title="<?php echo htmlspecialchars($img['title']); ?>">
            <i class="fas fa-search-plus"></i>
          </a>
          <span><?php echo $img['title']; ?></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Lightbox -->
<div id="lightbox" class="lightbox" role="dialog" aria-modal="true" aria-label="Image Lightbox" style="display:none">
  <button class="lightbox-close" id="lightboxClose" aria-label="Close">&times;</button>
  <button class="lightbox-prev" id="lightboxPrev" aria-label="Previous"><i class="fas fa-chevron-left"></i></button>
  <div class="lightbox-content">
    <img id="lightboxImg" src="" alt="">
    <p id="lightboxCaption"></p>
  </div>
  <button class="lightbox-next" id="lightboxNext" aria-label="Next"><i class="fas fa-chevron-right"></i></button>
</div>

<?php require_once 'includes/footer.php'; ?>
