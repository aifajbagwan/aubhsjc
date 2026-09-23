<?php
$base_depth = 0;
$page_title = 'Jr. College Admission (HSC)';
$page_desc  = 'Junior College Admission – AUBHS. Apply for Grades 11–12 (HSC) – Science, Commerce or Arts.';
require_once 'includes/header.php';
?>
<section class="page-hero">
  <div class="container"><div class="page-hero-content">
    <h1>Jr. College Admission (HSC)</h1>
    <nav class="breadcrumb"><a href="<?php echo url('index.php'); ?>">Home</a><span class="separator">›</span><a href="<?php echo url('admission.php'); ?>">Admission</a><span class="separator">›</span><span class="current">Jr. College Admission</span></nav>
  </div></div>
</section>
<section class="section">
  <div class="container">
    <div style="display:grid;grid-template-columns:1.3fr 1fr;gap:50px;align-items:start" class="reveal">
      <div>
        <div class="section-header" style="text-align:left;margin-bottom:25px"><span class="section-tag">Grades 11–12 (HSC Board)</span><h2 class="section-title">Junior College <span>Admission</span></h2><div class="section-divider" style="margin:0 0 20px"></div></div>
        <p>M.C.E. Society's Anglo Urdu Boy's High School &amp; Junior College offers admission to Junior College (FYJC – Grade 11 and SYJC – Grade 12) affiliated to the <strong>Maharashtra State Board of Secondary and Higher Secondary Education (MSBSHSE)</strong>.</p>
        <p>We offer three streams: <strong>Science, Commerce and Arts</strong>, each with experienced faculty, modern labs and comprehensive board exam preparation.</p>

        <h3 style="font-size:18px;font-weight:700;color:var(--dark);margin:25px 0 15px">Available Streams</h3>
        <div style="display:grid;gap:15px">
          <?php
          $streams = [
            ['name'=>'Science','color'=>'var(--primary)','icon'=>'fas fa-atom','subjects'=>'Physics, Chemistry, Biology / Mathematics, English','merit'=>'60%+ in SSC'],
            ['name'=>'Commerce','color'=>'var(--secondary)','icon'=>'fas fa-chart-line','subjects'=>'Accountancy, Economics, Business Studies, English','merit'=>'50%+ in SSC'],
            ['name'=>'Arts','color'=>'var(--accent)','icon'=>'fas fa-book','subjects'=>'History, Geography, Political Science, Sociology, English','merit'=>'40%+ in SSC'],
          ];
          foreach ($streams as $s): ?>
          <div style="background:#fff;border-radius:12px;padding:20px 25px;box-shadow:0 4px 20px rgba(0,0,0,0.07);border-left:4px solid <?php echo $s['color']; ?>;display:flex;gap:20px;align-items:start">
            <div style="width:45px;height:45px;background:<?php echo $s['color']; ?>;border-radius:10px;display:flex;align-items:center;justify-content:center;min-width:45px"><i class="<?php echo $s['icon']; ?>" style="color:#fff;font-size:18px"></i></div>
            <div>
              <h4 style="font-size:16px;font-weight:700;color:var(--dark);margin-bottom:5px"><?php echo $s['name']; ?> Stream</h4>
              <p style="font-size:13px;color:var(--text-light);margin-bottom:3px"><?php echo $s['subjects']; ?></p>
              <p style="font-size:12px;font-weight:700;color:<?php echo $s['color']; ?>"><i class="fas fa-star" style="margin-right:5px"></i>Merit Required: <?php echo $s['merit']; ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

        <h3 style="font-size:18px;font-weight:700;color:var(--dark);margin:25px 0 15px">Required Documents</h3>
        <div class="about-points">
          <div class="about-point"><i class="fas fa-file"></i> SSC Marksheet &amp; Passing Certificate</div>
          <div class="about-point"><i class="fas fa-file"></i> Transfer Certificate (TC) from previous school</div>
          <div class="about-point"><i class="fas fa-file"></i> Aadhar Card – Student &amp; Parent</div>
          <div class="about-point"><i class="fas fa-file"></i> Caste/Income Certificate (for concessions)</div>
          <div class="about-point"><i class="fas fa-file"></i> Passport-size photographs (6 copies)</div>
          <div class="about-point"><i class="fas fa-file"></i> Migration Certificate (if from outside Maharashtra)</div>
        </div>
      </div>

      <div>
        <div style="background:#fff;border-radius:16px;box-shadow:0 8px 40px rgba(0,0,0,0.1);overflow:hidden">
          <div style="background:linear-gradient(135deg,var(--secondary),#e67e22);padding:25px 30px">
            <h3 style="color:#fff;font-size:20px;font-weight:800;margin:0"><i class="fas fa-graduation-cap" style="margin-right:10px"></i> Apply for Jr. College</h3>
            <p style="color:rgba(255,255,255,0.85);font-size:13px;margin:5px 0 0">Choose your faculty and submit your enquiry</p>
          </div>
          <div style="padding:30px">
            <?php if (!empty($_GET['sent'])): ?><div class="alert alert-success"><i class="fas fa-check-circle"></i> Enquiry submitted! We will contact you shortly.</div><?php endif; ?>
            <form method="get" action="">
              <input type="hidden" name="sent" value="1">
              <div class="form-group"><label>Student's Name *</label><input type="text" class="form-control" name="student_name" placeholder="Full name" required></div>
              <div class="form-group"><label>Stream Applying For *</label>
                <select class="form-control" name="stream" required><option value="">— Select Stream —</option><option>Science (FYJC)</option><option>Commerce (FYJC)</option><option>Arts (FYJC)</option><option>Science (SYJC)</option><option>Commerce (SYJC)</option><option>Arts (SYJC)</option></select>
              </div>
              <div class="form-group"><label>SSC Percentage *</label><input type="text" class="form-control" name="ssc_percent" placeholder="e.g. 78.60%"></div>
              <div class="form-group"><label>Contact Number *</label><input type="tel" class="form-control" name="phone" placeholder="+91 XXXXX XXXXX" required></div>
              <div class="form-group"><label>Email Address</label><input type="email" class="form-control" name="email" placeholder="email@example.com"></div>
              <button type="submit" class="btn" style="width:100%;justify-content:center;background:linear-gradient(135deg,var(--secondary),#e67e22);color:#fff;border:none;padding:14px 28px;font-weight:700;border-radius:8px;display:flex;gap:8px;align-items:center"><i class="fas fa-paper-plane"></i> Submit Enquiry</button>
            </form>
          </div>
        </div>

        <div style="background:linear-gradient(135deg,var(--primary-dark),var(--primary));border-radius:12px;padding:25px;color:#fff;margin-top:20px;text-align:center">
          <p style="font-size:14px;margin-bottom:10px;opacity:0.9">Important Note</p>
          <p style="font-size:13px;opacity:0.85">TO CHOOSE YOUR SUBJECTS PLEASE STUDY THE ONLINE PDF COLLEGE BROCHURE. <br>FORMS ARE TO BE FILLED ONLY ONCE.</p>
          <a href="<?php echo url('admission.php'); ?>" class="btn" style="background:#fff;color:var(--primary);font-weight:700;margin-top:15px;font-size:13px"><i class="fas fa-download"></i> Download Brochure</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require_once 'includes/footer.php'; ?>
