<?php require_once __DIR__ . '/config.php'; ?>
<!-- MAP -->
<?php if (!empty($show_map)): ?>
<div class="map-section">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.014!2d72.8347!3d19.1197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sAndheri+Mumbai!5e0!3m2!1sen!2sin!4v1234567890"
          allowfullscreen="" loading="lazy" title="AUBHS Location"></iframe>
</div>
<?php endif; ?>

<!-- FOOTER -->
<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">

      <div class="footer-about">
        <div class="footer-logo">
          <img src="<?php echo asset('images/real/cropped-WhatsApp-Image-2020-12-04-at-12.38.24-PM-1-192x192.jpeg'); ?>"
               onerror="this.src='<?php echo asset('images/logo-fallback.png'); ?>'"
               alt="AUBHS Logo" width="55" height="55">
          <div class="logo-text">
            <h2>AUBHS &amp; Jr. College</h2>
            <span>M.C.E. Society, Pune</span>
          </div>
        </div>
        <p>M.C.E. Society's Anglo Urdu Boy's High School &amp; Junior College is committed to holistic education under the motto <em>"Knowledge is Liberation"</em>. Achieving 100% SSC results every year.</p>
        <div class="social-links">
          <a href="#" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-link" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-link" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul class="footer-links">
          <li><a href="<?php echo url('index.php'); ?>">Home</a></li>
          <li><a href="<?php echo url('about.php'); ?>">About Us</a></li>
          <li><a href="<?php echo url('admission.php'); ?>">Admissions</a></li>
          <li><a href="<?php echo url('facilities.php'); ?>">Facilities</a></li>
          <li><a href="<?php echo url('gallery.php'); ?>">Gallery</a></li>
          <li><a href="<?php echo url('contacts.php'); ?>">Contact Us</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>About Us</h4>
        <ul class="footer-links">
          <li><a href="<?php echo url('president-message.php'); ?>">President's Message</a></li>
          <li><a href="<?php echo url('principal-message.php'); ?>">Principal's Message</a></li>
          <li><a href="<?php echo url('mission-vision.php'); ?>">Mission &amp; Vision</a></li>
          <li><a href="<?php echo url('teaching-staff.php'); ?>">Teaching Staff</a></li>
          <li><a href="<?php echo url('rules.php'); ?>">Rules &amp; Regulations</a></li>
          <li><a href="<?php echo url('parents-instruction.php'); ?>">Parent Instructions</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Contact Info</h4>
        <div class="footer-contact-item">
          <i class="fas fa-map-marker-alt"></i>
          <span>Anglo Urdu Boy's High School &amp; Jr. College, Mumbai, Maharashtra, India</span>
        </div>
        <div class="footer-contact-item">
          <i class="fas fa-phone"></i>
          <span><a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="color:inherit"><?php echo SITE_PHONE; ?></a></span>
        </div>
        <div class="footer-contact-item">
          <i class="fas fa-envelope"></i>
          <span><a href="mailto:<?php echo SITE_EMAIL; ?>" style="color:inherit"><?php echo SITE_EMAIL; ?></a></span>
        </div>
        <div class="footer-contact-item">
          <i class="fas fa-clock"></i>
          <span>Mon – Sat: 8:00 AM – 5:00 PM</span>
        </div>
      </div>

    </div><!-- /footer-grid -->

    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> AUBHS &amp; Jr. College &ndash; M.C.E. Society. All Rights Reserved.</p>
      <p>Anglo Urdu Boy's High School &amp; Junior College &ndash; Knowledge is Liberation</p>
    </div>
  </div>
</footer>

<script src="<?php echo asset('js/main.js'); ?>"></script>
<?php if (!empty($extra_js)) echo $extra_js; ?>
</body>
</html>
