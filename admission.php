<?php
$base_depth = 0;
$page_title = 'Admission';
$page_desc  = "Online Admission – M.C.E. Society's Anglo Urdu Boy's High School & Junior College. Apply for SSC or HSC.";
require_once 'includes/header.php';
?>

<section class="page-hero">
  <div class="container"><div class="page-hero-content">
    <h1>Admission</h1>
    <nav class="breadcrumb" aria-label="breadcrumb">
      <a href="<?php echo url('index.php'); ?>">Home</a>
      <span class="separator">›</span>
      <span class="current">Admission</span>
    </nav>
  </div></div>
</section>

<!-- ONLINE APPLICATION FORM SYSTEM (real content) -->
<section class="section">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-tag">M.C.E. Society's Anglo Urdu Boy's High School &amp; Junior College</span>
      <h2 class="section-title">Online Application <span>Form System</span></h2>
      <div class="section-divider"></div>
    </div>

    <div style="display:grid;grid-template-columns:1fr 1fr;gap:50px;align-items:start" class="reveal">

      <!-- Application form panel -->
      <div>
        <div style="background:#fff;border-radius:16px;box-shadow:0 8px 40px rgba(0,0,0,0.1);overflow:hidden">
          <div style="background:linear-gradient(135deg,var(--primary-dark),var(--primary));padding:25px 30px">
            <h3 style="color:#fff;font-size:20px;font-weight:800;margin:0"><i class="fas fa-file-alt" style="margin-right:10px"></i> Apply Online</h3>
            <p style="color:rgba(255,255,255,0.85);font-size:13px;margin:5px 0 0">Select your faculty and class to begin</p>
          </div>
          <div style="padding:30px">
            <form method="get" action="<?php echo url('admission/apply.php'); ?>" id="admissionSelectForm">
              <div class="form-group">
                <label for="faculty" style="font-weight:700">FACULTY <span style="color:#e74c3c">*</span></label>
                <select id="faculty" name="faculty" class="form-control" required>
                  <option value="">— SELECT FACULTY —</option>
                  <option value="science">Science (Physics, Chemistry, Maths/Biology)</option>
                  <option value="commerce">Commerce (Accountancy, Economics, Business)</option>
                  <option value="arts">Arts (History, Geography, Pol. Science)</option>
                  <option value="ssc">School Section (SSC – Grades 8–10)</option>
                </select>
              </div>
              <div class="form-group">
                <label for="class" style="font-weight:700">CLASS <span style="color:#e74c3c">*</span></label>
                <select id="class" name="class" class="form-control" required>
                  <option value="">— SELECT CLASS —</option>
                  <option value="8">Grade 8</option>
                  <option value="9">Grade 9</option>
                  <option value="10">Grade 10 (SSC)</option>
                  <option value="11">Grade 11 (FYJC)</option>
                  <option value="12">Grade 12 (SYJC)</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;margin-top:10px">
                <i class="fas fa-arrow-right"></i> Continue
              </button>
            </form>

            <div style="margin-top:25px;padding-top:20px;border-top:1px solid #eee;display:flex;gap:12px;flex-wrap:wrap">
              <a href="#" class="btn" style="background:#e74c3c;color:#fff;font-size:13px;padding:10px 18px"><i class="fas fa-lock"></i> Admin Login</a>
              <a href="#" class="btn" style="background:var(--secondary);color:#fff;font-size:13px;padding:10px 18px"><i class="fas fa-book"></i> Online Brochure</a>
              <a href="#" class="btn btn-outline" style="font-size:13px;padding:10px 18px"><i class="fas fa-download"></i> Download Form (PDF)</a>
            </div>
          </div>
        </div>

        <!-- Important Notes (real content from site) -->
        <div style="background:#fff3cd;border:1px solid #ffc107;border-radius:12px;padding:25px;margin-top:25px">
          <h4 style="font-size:16px;font-weight:700;color:#856404;margin-bottom:15px"><i class="fas fa-exclamation-triangle" style="margin-right:8px"></i> Important Notes</h4>
          <ol style="padding-left:20px;margin:0">
            <li style="font-size:13px;color:#856404;padding:5px 0;font-weight:600">TO CHOOSE YOUR SUBJECTS PLEASE STUDY THE ONLINE PDF COLLEGE BROCHURE.</li>
            <li style="font-size:13px;color:#856404;padding:5px 0;font-weight:600">YOU WILL BE ABLE TO FILL THE ONLINE FORM ONLY ONCE. INCOMPLETE FORM SUBMITTED WILL NOT BE CONSIDERED.</li>
            <li style="font-size:13px;color:#856404;padding:5px 0;font-weight:600">DO NOT TRY TO RELOAD THE PAGE WHILE YOU ARE SUBMITTING THE FORM.</li>
          </ol>
        </div>
      </div>

      <!-- Info column -->
      <div>
        <div class="section-header" style="text-align:left;margin-bottom:25px">
          <span class="section-tag">Admission 2024–25</span>
          <h2 class="section-title" style="font-size:26px">Admission <span>Information</span></h2>
          <div class="section-divider" style="margin:0 0 20px"></div>
        </div>
        <p>AUBHS &amp; Jr. College invites applications for admission to School Section (Grades 8–10) and Junior College (Grades 11–12 – Science, Commerce, Arts) for the academic year 2024–25.</p>

        <div style="margin:25px 0">
          <div style="background:#fff;border-radius:12px;padding:20px 25px;box-shadow:0 4px 20px rgba(0,0,0,0.08);border-left:4px solid var(--primary);margin-bottom:15px">
            <h4 style="font-size:15px;font-weight:700;color:var(--dark);margin-bottom:12px"><i class="fas fa-calendar" style="color:var(--primary);margin-right:8px"></i> Key Dates 2024–25</h4>
            <table style="width:100%;border-collapse:collapse">
              <tr><td style="padding:7px 0;border-bottom:1px solid #eee;font-size:13px;font-weight:600">Forms Available</td><td style="padding:7px 0;border-bottom:1px solid #eee;font-size:13px;color:var(--primary)">1st April 2024</td></tr>
              <tr><td style="padding:7px 0;border-bottom:1px solid #eee;font-size:13px;font-weight:600">Last Date to Apply</td><td style="padding:7px 0;border-bottom:1px solid #eee;font-size:13px;color:var(--primary)">31st May 2024</td></tr>
              <tr><td style="padding:7px 0;border-bottom:1px solid #eee;font-size:13px;font-weight:600">Merit List Published</td><td style="padding:7px 0;border-bottom:1px solid #eee;font-size:13px;color:var(--primary)">15th June 2024</td></tr>
              <tr><td style="padding:7px 0;font-size:13px;font-weight:600">Classes Begin</td><td style="padding:7px 0;font-size:13px;color:var(--primary)">15th July 2024</td></tr>
            </table>
          </div>
        </div>

        <div class="about-points">
          <div class="about-point"><i class="fas fa-check-circle"></i> Separate SSC &amp; HSC streams</div>
          <div class="about-point"><i class="fas fa-check-circle"></i> Science, Commerce &amp; Arts available</div>
          <div class="about-point"><i class="fas fa-check-circle"></i> Fee concession for deserving students</div>
          <div class="about-point"><i class="fas fa-check-circle"></i> All Maharashtra Board subjects covered</div>
        </div>

        <a href="<?php echo url('contacts.php'); ?>" class="btn btn-primary" style="margin-top:20px"><i class="fas fa-phone"></i> Contact Admissions Office</a>
        <a href="<?php echo url('high-school-admission.php'); ?>" class="btn btn-secondary" style="margin-top:20px;margin-left:10px"><i class="fas fa-school"></i> School Admission</a>
      </div>
    </div>
  </div>
</section>

<!-- Footer note (real) -->
<div style="background:var(--dark);padding:15px;text-align:center">
  <p style="color:rgba(255,255,255,0.6);font-size:12px;margin:0">Copyright &copy; <?php echo date('Y'); ?> Anglo Urdu Boy's High School &amp; Junior College. Powered By PAI International Learning Solutions. All Rights Reserved.</p>
</div>

<?php require_once 'includes/footer.php'; ?>
