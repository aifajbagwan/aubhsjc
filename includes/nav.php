<?php
// Determine active menu item
$current_page = basename($_SERVER['PHP_SELF']);
$current_dir  = basename(dirname($_SERVER['PHP_SELF']));

function is_active(array $dirs): string {
    global $current_dir, $current_page;
    foreach ($dirs as $d) {
        if ($current_dir === $d || ($current_page === $d)) return ' active';
    }
    return '';
}
function is_active_page(string $file): string {
    global $current_page, $current_dir;
    return ($current_page === $file || $current_dir === rtrim($file, '.php')) ? ' active' : '';
}
?>
<nav class="main-nav" id="mainNav" role="navigation">
  <div class="nav-item<?php echo is_active_page('index.php') === '' && $current_dir === 'aubhsjc' ? ' active' : (is_active(['aubhsjc']) ? ' active' : ''); ?>">
    <a href="<?php echo url('index.php'); ?>">Home</a>
  </div>

  <div class="nav-item has-sub<?php echo is_active(['about-1','president-message','principal-message','mission-vision']); ?>">
    <a href="<?php echo url('about.php'); ?>">About Us <i class="fas fa-chevron-down nav-arrow"></i></a>
    <ul class="sub-menu">
      <li><a href="<?php echo url('about.php'); ?>">About AUBHS</a></li>
      <li><a href="<?php echo url('president-message.php'); ?>">President's Message</a></li>
      <li><a href="<?php echo url('principal-message.php'); ?>">Principal's Message</a></li>
      <li><a href="<?php echo url('mission-vision.php'); ?>">Mission &amp; Vision</a></li>
    </ul>
  </div>

  <div class="nav-item has-sub<?php echo is_active(['admission','high-school-admission','jr-college-admission']); ?>">
    <a href="<?php echo url('admission.php'); ?>">Admission <i class="fas fa-chevron-down nav-arrow"></i></a>
    <ul class="sub-menu">
      <li><a href="<?php echo url('admission.php'); ?>">Admission Overview</a></li>
      <li><a href="<?php echo url('high-school-admission.php'); ?>">School Admission (SSC)</a></li>
      <li><a href="<?php echo url('jr-college-admission.php'); ?>">Jr. College Admission (HSC)</a></li>
    </ul>
  </div>

  <div class="nav-item has-sub<?php echo is_active(['facilities','infrastructure','library','chemistry-lab','physics-lab','computer-lab']); ?>">
    <a href="<?php echo url('facilities.php'); ?>">Facilities <i class="fas fa-chevron-down nav-arrow"></i></a>
    <ul class="sub-menu">
      <li><a href="<?php echo url('infrastructure.php'); ?>">Infrastructure</a></li>
      <li><a href="<?php echo url('library.php'); ?>">Library</a></li>
      <li><a href="<?php echo url('chemistry-lab.php'); ?>">Chemistry Lab</a></li>
      <li><a href="<?php echo url('physics-lab.php'); ?>">Physics Lab</a></li>
      <li><a href="<?php echo url('computer-lab.php'); ?>">Computer Lab</a></li>
    </ul>
  </div>

  <div class="nav-item has-sub<?php echo is_active(['information','teaching-staff','rules','parents-instruction']); ?>">
    <a href="<?php echo url('information.php'); ?>">Information <i class="fas fa-chevron-down nav-arrow"></i></a>
    <ul class="sub-menu">
      <li><a href="<?php echo url('teaching-staff.php'); ?>">Teaching Staff</a></li>
      <li><a href="<?php echo url('rules.php'); ?>">Rules &amp; Regulations</a></li>
      <li><a href="<?php echo url('parents-instruction.php'); ?>">Parent's Instructions</a></li>
    </ul>
  </div>

  <div class="nav-item<?php echo is_active(['gallery']); ?>">
    <a href="<?php echo url('gallery.php'); ?>">Gallery</a>
  </div>

  <div class="nav-item<?php echo is_active(['contacts']); ?>">
    <a href="<?php echo url('contacts.php'); ?>">Contacts</a>
  </div>
</nav>
