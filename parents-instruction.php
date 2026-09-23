<?php
$base_depth = 0;
$page_title = "Parent's Instructions";
$page_desc  = "Parent's Instructions – AUBHS & Jr. College. Guidelines for parents and guardians.";
require_once 'includes/header.php';
?>
<section class="page-hero">
  <div class="container"><div class="page-hero-content">
    <h1>Parent's Instructions</h1>
    <nav class="breadcrumb"><a href="<?php echo url('index.php'); ?>">Home</a><span class="separator">›</span><a href="<?php echo url('information.php'); ?>">Information</a><span class="separator">›</span><span class="current">Parent's Instructions</span></nav>
  </div></div>
</section>
<section class="section">
  <div class="container">
    <div style="max-width:900px;margin:0 auto">
      <div class="section-header" style="text-align:left;margin-bottom:30px" class="reveal">
        <span class="section-tag">Dear Parents &amp; Guardians</span>
        <h2 class="section-title">Guidelines for <span>Parents</span></h2>
        <div class="section-divider" style="margin:0 0 20px"></div>
        <p>We believe that a strong partnership between parents and the school is essential for a student's success. Please read the following guidelines carefully and cooperate with us for the best outcomes for your child.</p>
      </div>
      <?php
      $sections = [
        ['title'=>'Meeting the Principal / Teachers','icon'=>'fas fa-school','color'=>'var(--primary)','items'=>[
          'Parents wishing to meet the Principal or teachers must take a prior appointment through the school office.',
          'Parents are not permitted to enter classrooms or disturb ongoing classes without permission.',
          'Parent-Teacher Meetings (PTM) are held regularly. Parents are strongly urged to attend.',
          'All grievances must be communicated in writing through the school diary or official channels.',
        ]],
        ['title'=>'Child\'s Attendance & Behaviour','icon'=>'fas fa-child','color'=>'var(--secondary)','items'=>[
          'Ensure your ward attends school regularly and on time. Habitual absence may affect promotion.',
          'For any leave, submit a written application signed by the parent/guardian in advance.',
          'Parents are responsible for the behaviour of their children outside school premises.',
          'In case of a contagious disease, keep the child at home and inform the school immediately.',
        ]],
        ['title'=>'Academic Responsibilities','icon'=>'fas fa-book','color'=>'var(--accent)','items'=>[
          'Parents must regularly check and sign the student\'s diary/progress report.',
          'Ensure your ward completes homework and project work on time.',
          'Regularly monitor your child\'s performance and stay informed about exam schedules.',
          'Report any academic difficulty faced by your child to the class teacher immediately.',
        ]],
        ['title'=>'Fees & Payments','icon'=>'fas fa-rupee-sign','color'=>'#e74c3c','items'=>[
          'School fees must be paid by the dates specified at the beginning of each term.',
          'Late payment of fees will attract a fine as per school policy.',
          'Non-payment of fees for two consecutive months may result in suspension.',
          'Fee concessions are available for deserving students. Apply to the office with proper documentation.',
        ]],
        ['title'=>'Transport & Safety','icon'=>'fas fa-bus','color'=>'#8e44ad','items'=>[
          'Students using school transport must board and alight only at the designated stop.',
          'Inform the transport in-charge if your child will not be using the bus on any given day.',
          'Parents picking up children must carry valid ID. Unknown persons cannot collect students.',
        ]],
      ];
      ?>
      <div style="display:grid;gap:20px">
        <?php foreach ($sections as $s): ?>
        <div style="background:#fff;border-radius:12px;padding:30px;box-shadow:0 5px 25px rgba(0,0,0,0.08);border-left:5px solid <?php echo $s['color']; ?>" class="reveal">
          <h3 style="font-size:17px;font-weight:700;color:var(--dark);margin-bottom:15px"><i class="<?php echo $s['icon']; ?>" style="color:<?php echo $s['color']; ?>;margin-right:10px"></i><?php echo htmlspecialchars($s['title']); ?></h3>
          <ul style="list-style:none;padding:0">
            <?php foreach ($s['items'] as $item): ?>
            <li style="padding:8px 0;border-bottom:1px solid #eee;font-size:14px;display:flex;gap:10px">
              <i class="fas fa-angle-right" style="color:<?php echo $s['color']; ?>;margin-top:3px;min-width:12px"></i>
              <?php echo htmlspecialchars($item); ?>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endforeach; ?>
      </div>

      <div style="background:linear-gradient(135deg,var(--primary),var(--primary-dark));border-radius:12px;padding:35px;color:#fff;text-align:center;margin-top:40px" class="reveal">
        <h3 style="font-family:'Montserrat',sans-serif;font-size:22px;font-weight:800;margin-bottom:15px">📞 Parent Support</h3>
        <p style="opacity:0.9;margin-bottom:20px">For any queries, concerns or suggestions, our Parent Liaison Officer is available Monday–Friday from 10:00 AM to 4:00 PM.</p>
        <div style="display:flex;gap:20px;justify-content:center;flex-wrap:wrap">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="btn" style="background:#fff;color:var(--primary);font-weight:700"><i class="fas fa-phone"></i> Call: <?php echo SITE_PHONE; ?></a>
          <a href="<?php echo url('contacts.php'); ?>" class="btn btn-secondary"><i class="fas fa-envelope"></i> Send a Message</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require_once 'includes/footer.php'; ?>
