<?php
$base_depth = 0;
$page_title = 'Information';
$page_desc  = "Information – AUBHS & Jr. College. Teaching staff, rules, academic calendar and parent guidelines.";
require_once 'includes/header.php';
?>
<section class="page-hero">
  <div class="container"><div class="page-hero-content">
    <h1>Information</h1>
    <nav class="breadcrumb" aria-label="breadcrumb">
      <a href="<?php echo url('index.php'); ?>">Home</a><span class="separator">›</span>
      <span class="current">Information</span>
    </nav>
  </div></div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-tag">Resources</span>
      <h2 class="section-title">Important <span>Information</span></h2>
      <div class="section-divider"></div>
      <p class="section-desc">Everything you need to know about AUBHS — our staff, rules, guidelines and academic calendar.</p>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:30px" class="reveal">
      <a href="<?php echo url('teaching-staff.php'); ?>" style="display:block;text-decoration:none" class="program-card">
        <div class="program-card-img"><img src="https://images.unsplash.com/photo-1573497491765-dccce02b29df?w=600&q=80" alt="Teaching Staff"></div>
        <div class="program-card-body"><h3><i class="fas fa-chalkboard-teacher" style="color:var(--primary);margin-right:8px"></i> Teaching Staff</h3><p>Meet our 81 dedicated and qualified faculty members across all subjects and streams at AUBHS.</p><span class="btn btn-primary" style="display:inline-flex">View Staff</span></div>
      </a>
      <a href="<?php echo url('rules.php'); ?>" style="display:block;text-decoration:none" class="program-card">
        <div class="program-card-img"><img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=600&q=80" alt="Rules"></div>
        <div class="program-card-body"><h3><i class="fas fa-gavel" style="color:var(--primary);margin-right:8px"></i> Rules &amp; Regulations</h3><p>School rules covering attendance, uniform, examinations, behaviour, library and laboratory conduct.</p><span class="btn btn-primary" style="display:inline-flex">View Rules</span></div>
      </a>
      <a href="<?php echo url('parents-instruction.php'); ?>" style="display:block;text-decoration:none" class="program-card">
        <div class="program-card-img"><img src="https://images.unsplash.com/photo-1531983412531-1f49a365ffed?w=600&q=80" alt="Parents"></div>
        <div class="program-card-body"><h3><i class="fas fa-users" style="color:var(--primary);margin-right:8px"></i> Parent's Instructions</h3><p>Important guidelines for parents and guardians to support their child's education at AUBHS.</p><span class="btn btn-primary" style="display:inline-flex">View Instructions</span></div>
      </a>
    </div>
  </div>
</section>

<section class="section bg-light">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-tag">Academic Year 2024–25</span>
      <h2 class="section-title">Academic <span>Calendar</span></h2>
      <div class="section-divider"></div>
    </div>
    <div class="table-wrap reveal">
      <table>
        <thead><tr><th>#</th><th>Event</th><th>Month</th><th>Applicable To</th></tr></thead>
        <tbody>
          <tr><td>1</td><td>Opening of Academic Year</td><td>July 2024</td><td>All Classes</td></tr>
          <tr><td>2</td><td>Unit Test I</td><td>August 2024</td><td>Grades 8–12</td></tr>
          <tr><td>3</td><td>Independence Day Celebration</td><td>15 August 2024</td><td>All Classes</td></tr>
          <tr><td>4</td><td>First Term Examination</td><td>October 2024</td><td>Grades 8–12</td></tr>
          <tr><td>5</td><td>Diwali Vacation</td><td>November 2024</td><td>All Classes</td></tr>
          <tr><td>6</td><td>Unit Test II</td><td>December 2024</td><td>Grades 8–12</td></tr>
          <tr><td>7</td><td>Annual Sports Day</td><td>January 2025</td><td>All Classes</td></tr>
          <tr><td>8</td><td>Preliminary Examination</td><td>January 2025</td><td>Grades 10 &amp; 12</td></tr>
          <tr><td>9</td><td>Annual Prize Distribution Day</td><td>February 2025</td><td>All Classes</td></tr>
          <tr><td>10</td><td>SSC Board Examination</td><td>March 2025</td><td>Grade 10</td></tr>
          <tr><td>11</td><td>HSC Board Examination</td><td>February–March 2025</td><td>Grade 12</td></tr>
          <tr><td>12</td><td>Second Term Examination</td><td>March 2025</td><td>Grades 8, 9 &amp; 11</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>
<?php require_once 'includes/footer.php'; ?>
