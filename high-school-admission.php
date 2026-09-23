<?php
$base_depth = 0;
$page_title = 'High School Admission (SSC)';
$page_desc  = 'School Admission – AUBHS. Apply for Grades 8–10 (SSC) at Anglo Urdu Boy\'s High School.';
require_once 'includes/header.php';
?>
<section class="page-hero">
  <div class="container"><div class="page-hero-content">
    <h1>School Admission (SSC)</h1>
    <nav class="breadcrumb"><a href="<?php echo url('index.php'); ?>">Home</a><span class="separator">›</span><a href="<?php echo url('admission.php'); ?>">Admission</a><span class="separator">›</span><span class="current">School Admission</span></nav>
  </div></div>
</section>
<section class="section">
  <div class="container">
    <div style="display:grid;grid-template-columns:1.3fr 1fr;gap:50px;align-items:start" class="reveal">
      <div>
        <div class="section-header" style="text-align:left;margin-bottom:25px"><span class="section-tag">Grades 8–10 (SSC Board)</span><h2 class="section-title">School Section <span>Admission</span></h2><div class="section-divider" style="margin:0 0 20px"></div></div>
        <p>We invite applications for admission to the School Section (Grades 8, 9 and 10) at M.C.E. Society's Anglo Urdu Boy's High School &amp; Junior College for the current academic year.</p>
        <p>Our school follows the <strong>Maharashtra State Secondary &amp; Higher Secondary Education Board (MSBSHSE)</strong> curriculum. Students benefit from our 100% SSC result track record and the dedicated mentoring of 81 experienced teachers.</p>
        <h3 style="font-size:18px;font-weight:700;color:var(--dark);margin:25px 0 15px">Eligibility Criteria</h3>
        <div class="table-wrap"><table><thead><tr><th>Grade Applying For</th><th>Minimum Passed Grade</th><th>Age Limit</th></tr></thead><tbody>
          <tr><td>Grade 8</td><td>Grade 7 from any recognised school</td><td>12–14 years</td></tr>
          <tr><td>Grade 9</td><td>Grade 8 from any recognised school</td><td>13–15 years</td></tr>
          <tr><td>Grade 10 (SSC)</td><td>Grade 9 from MSBSHSE affiliated school</td><td>14–16 years</td></tr>
        </tbody></table></div>
        <h3 style="font-size:18px;font-weight:700;color:var(--dark);margin:25px 0 15px">Required Documents</h3>
        <div class="about-points">
          <div class="about-point"><i class="fas fa-file"></i> Birth Certificate / Age Proof</div>
          <div class="about-point"><i class="fas fa-file"></i> Previous School Progress Report / Marksheet</div>
          <div class="about-point"><i class="fas fa-file"></i> Transfer Certificate (TC) from previous school</div>
          <div class="about-point"><i class="fas fa-file"></i> Aadhar Card of Student &amp; Parent</div>
          <div class="about-point"><i class="fas fa-file"></i> Passport-size photographs (4 copies)</div>
          <div class="about-point"><i class="fas fa-file"></i> Caste Certificate (if applicable for concession)</div>
        </div>
      </div>
      <div>
        <div style="background:#fff;border-radius:16px;box-shadow:0 8px 40px rgba(0,0,0,0.1);overflow:hidden">
          <div style="background:linear-gradient(135deg,var(--primary-dark),var(--primary));padding:25px 30px">
            <h3 style="color:#fff;font-size:20px;font-weight:800;margin:0"><i class="fas fa-school" style="margin-right:10px"></i> Apply for School</h3>
            <p style="color:rgba(255,255,255,0.85);font-size:13px;margin:5px 0 0">Fill the enquiry form to start your admission process</p>
          </div>
          <div style="padding:30px">
            <?php if (!empty($_GET['sent'])): ?>
            <div class="alert alert-success"><i class="fas fa-check-circle"></i> Enquiry submitted! We will contact you shortly.</div>
            <?php endif; ?>
            <form method="get" action="">
              <input type="hidden" name="sent" value="1">
              <div class="form-group"><label>Student's Name *</label><input type="text" class="form-control" name="student_name" placeholder="Full name" required></div>
              <div class="form-group"><label>Class Applying For *</label>
                <select class="form-control" name="class" required><option value="">—Select—</option><option>Grade 8</option><option>Grade 9</option><option>Grade 10</option></select>
              </div>
              <div class="form-group"><label>Parent/Guardian Name *</label><input type="text" class="form-control" name="parent_name" placeholder="Parent name" required></div>
              <div class="form-group"><label>Contact Number *</label><input type="tel" class="form-control" name="phone" placeholder="+91 XXXXX XXXXX" required></div>
              <div class="form-group"><label>Email Address</label><input type="email" class="form-control" name="email" placeholder="email@example.com"></div>
              <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center"><i class="fas fa-paper-plane"></i> Submit Enquiry</button>
            </form>
            <div style="margin-top:20px;padding-top:20px;border-top:1px solid #eee;text-align:center">
              <p style="font-size:13px;color:var(--text-light)">Or call us directly:</p>
              <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="font-size:18px;font-weight:700;color:var(--primary);text-decoration:none"><i class="fas fa-phone" style="margin-right:8px"></i><?php echo SITE_PHONE; ?></a>
            </div>
          </div>
        </div>
        <div style="background:#e8f5e9;border:1px solid var(--primary);border-radius:12px;padding:20px;margin-top:20px">
          <h4 style="font-size:15px;font-weight:700;color:var(--primary-dark);margin-bottom:10px"><i class="fas fa-trophy" style="margin-right:8px"></i> Why Choose Our School?</h4>
          <ul style="list-style:none;padding:0"><li style="font-size:13px;padding:5px 0"><i class="fas fa-check" style="color:var(--primary);margin-right:8px"></i> 100% SSC Board Results every year</li><li style="font-size:13px;padding:5px 0"><i class="fas fa-check" style="color:var(--primary);margin-right:8px"></i> Best School Award winner</li><li style="font-size:13px;padding:5px 0"><i class="fas fa-check" style="color:var(--primary);margin-right:8px"></i> Digital Library &amp; ICT Labs</li><li style="font-size:13px;padding:5px 0"><i class="fas fa-check" style="color:var(--primary);margin-right:8px"></i> 81 Dedicated faculty members</li></ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require_once 'includes/footer.php'; ?>
