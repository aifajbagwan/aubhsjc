<?php
$base_depth = 0;
$page_title = 'Contacts';
$page_desc  = 'Contact AUBHS & Jr. College – Phone, Email, Address and Enquiry Form.';
$show_map   = true;

// Handle form submission
$success = false;
$errors  = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $phone   = trim($_POST['phone'] ?? '');
    $inqtype = trim($_POST['inquiry_type'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (empty($name))    $errors[] = 'Name is required.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'A valid email is required.';
    if (empty($message)) $errors[] = 'Message is required.';

    if (empty($errors)) {
        // In production: send email via mail() or SMTP
        $success = true;
    }
}

require_once 'includes/header.php';
?>

<section class="page-hero">
  <div class="container"><div class="page-hero-content">
    <h1>Contact Us</h1>
    <nav class="breadcrumb" aria-label="breadcrumb">
      <a href="<?php echo url('index.php'); ?>">Home</a>
      <span class="separator">›</span>
      <span class="current">Contacts</span>
    </nav>
  </div></div>
</section>

<!-- QUICK CONTACT INFO CARDS -->
<section class="section" style="padding-bottom:0">
  <div class="container">
    <div class="contact-cards-grid reveal">
      <div class="contact-info-card">
        <div class="contact-card-icon"><i class="fas fa-phone"></i></div>
        <h3>Phone</h3>
        <p><a href="tel:<?php echo SITE_PHONE_RAW; ?>"><?php echo SITE_PHONE; ?></a></p>
        <span>Mon–Sat, 8 AM–5 PM</span>
      </div>
      <div class="contact-info-card">
        <div class="contact-card-icon"><i class="fas fa-envelope"></i></div>
        <h3>Email</h3>
        <p><a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a></p>
        <span>We reply within 24 hrs</span>
      </div>
      <div class="contact-info-card">
        <div class="contact-card-icon"><i class="fas fa-map-marker-alt"></i></div>
        <h3>Address</h3>
        <p>Anglo Urdu Boys High School &amp; Jr. College</p>
        <span>Mumbai, Maharashtra, India</span>
      </div>
      <div class="contact-info-card">
        <div class="contact-card-icon"><i class="fas fa-clock"></i></div>
        <h3>Office Hours</h3>
        <p>Monday – Saturday</p>
        <span>8:00 AM – 5:00 PM</span>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT FORM + DETAILS -->
<section class="section">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1.4fr;gap:50px;align-items:start" class="reveal">

      <!-- Left: Details -->
      <div>
        <div class="section-header" style="text-align:left;margin-bottom:25px">
          <span class="section-tag">Reach Us Directly</span>
          <h2 class="section-title" style="font-size:26px">We're Here <span>to Help</span></h2>
          <div class="section-divider" style="margin:0 0 20px"></div>
        </div>
        <p>Whether you have questions about admissions, facilities, or want to schedule a campus visit, our team is ready to assist you.</p>

        <div class="contact-detail-list">
          <div class="contact-detail-item">
            <i class="fas fa-school"></i>
            <div>
              <strong>Full Institution Name</strong>
              <span>M.C.E. Society's Anglo Urdu Boy's High School &amp; Junior College</span>
            </div>
          </div>
          <div class="contact-detail-item">
            <i class="fas fa-map-marker-alt"></i>
            <div>
              <strong>Address</strong>
              <span>Mumbai, Maharashtra, India</span>
            </div>
          </div>
          <div class="contact-detail-item">
            <i class="fas fa-phone"></i>
            <div>
              <strong>Phone</strong>
              <span><a href="tel:<?php echo SITE_PHONE_RAW; ?>"><?php echo SITE_PHONE; ?></a></span>
            </div>
          </div>
          <div class="contact-detail-item">
            <i class="fas fa-envelope"></i>
            <div>
              <strong>Email</strong>
              <span><a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a></span>
            </div>
          </div>
          <div class="contact-detail-item">
            <i class="fas fa-university"></i>
            <div>
              <strong>Society</strong>
              <span>M.C.E. Society, Pune</span>
            </div>
          </div>
          <div class="contact-detail-item">
            <i class="fas fa-globe"></i>
            <div>
              <strong>Website</strong>
              <span><a href="https://aubhsjc.com" target="_blank" rel="noopener">aubhsjc.com</a></span>
            </div>
          </div>
        </div>

        <div class="social-links" style="margin-top:25px">
          <a href="#" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-link" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-link" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <!-- Right: Form -->
      <div>
        <div class="section-header" style="text-align:left;margin-bottom:25px">
          <span class="section-tag">Enquire Now</span>
          <h2 class="section-title" style="font-size:26px">Send Us a <span>Message</span></h2>
          <div class="section-divider" style="margin:0 0 20px"></div>
        </div>

        <?php if ($success): ?>
        <div class="alert alert-success">
          <i class="fas fa-check-circle"></i> Thank you, <?php echo htmlspecialchars($_POST['name']); ?>! Your message has been received. We will contact you within 24 hours.
        </div>
        <?php endif; ?>
        <?php if (!empty($errors)): ?>
        <div class="alert alert-error">
          <i class="fas fa-exclamation-triangle"></i>
          <ul style="margin:10px 0 0;padding-left:20px"><?php foreach ($errors as $e) echo "<li>$e</li>"; ?></ul>
        </div>
        <?php endif; ?>

        <form method="post" action="" id="contactForm" class="contact-form-el">
          <div class="form-row">
            <div class="form-group">
              <label for="name">Your Name <span style="color:#e74c3c">*</span></label>
              <input type="text" id="name" name="name" class="form-control" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>" placeholder="Your full name" required>
            </div>
            <div class="form-group">
              <label for="email">Your Email <span style="color:#e74c3c">*</span></label>
              <input type="email" id="email" name="email" class="form-control" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" placeholder="your@email.com" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone" name="phone" class="form-control" value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>" placeholder="+91 XXXXX XXXXX">
            </div>
            <div class="form-group">
              <label for="inquiry_type">Inquiry Type</label>
              <select id="inquiry_type" name="inquiry_type" class="form-control">
                <option value="">— Select —</option>
                <option value="admission" <?php echo (($_POST['inquiry_type'] ?? '') === 'admission') ? 'selected' : ''; ?>>Admission Enquiry</option>
                <option value="general" <?php echo (($_POST['inquiry_type'] ?? '') === 'general') ? 'selected' : ''; ?>>General Query</option>
                <option value="facilities" <?php echo (($_POST['inquiry_type'] ?? '') === 'facilities') ? 'selected' : ''; ?>>Facilities</option>
                <option value="fees" <?php echo (($_POST['inquiry_type'] ?? '') === 'fees') ? 'selected' : ''; ?>>Fees &amp; Payments</option>
                <option value="other" <?php echo (($_POST['inquiry_type'] ?? '') === 'other') ? 'selected' : ''; ?>>Other</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" class="form-control" value="<?php echo htmlspecialchars($_POST['subject'] ?? ''); ?>" placeholder="e.g. Admission enquiry for Grade 9">
          </div>
          <div class="form-group">
            <label for="message">Your Message <span style="color:#e74c3c">*</span></label>
            <textarea id="message" name="message" class="form-control" rows="5" placeholder="Write your message here..." required><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
          </div>
          <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center">
            <i class="fas fa-paper-plane"></i> Send Message
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
