<?php
$base_depth = 0;
$page_title = 'Home';
$page_desc  = "M.C.E. Society's Anglo Urdu Boy's High School & Junior College – The future of the World is in our classroom today!";
require_once 'includes/header.php';
?>

<!-- HERO SLIDER -->
<section class="hero-slider" id="heroSlider">
  <div class="slide active">
    <div style="display: flex; height: 100%; width: 100%;">
      <div style="flex: 1; background-image:url('<?php echo asset('images/banner%20images/banner1.jpeg'); ?>'); background-size: cover; background-position: center;"></div>
      <div style="flex: 1; background-image:url('<?php echo asset('images/banner%20images/banner2.jpeg'); ?>'); background-size: cover; background-position: center;"></div>
    </div>
  </div>
  <div class="slide">
    <div style="display: flex; height: 100%; width: 100%;">
      <div style="flex: 1; background-image:url('<?php echo asset('images/banner%20images/banner3.jpg'); ?>'); background-size: cover; background-position: center;"></div>
      <div style="flex: 1; background-image:url('<?php echo asset('images/banner%20images/banner4.jpg'); ?>'); background-size: cover; background-position: center;"></div>
    </div>
  </div>
  <div class="slide">
    <div style="display: flex; height: 100%; width: 100%;">
      <div style="flex: 1; background-image:url('<?php echo asset('images/banner%20images/banner5.jpg'); ?>'); background-size: cover; background-position: center;"></div>
      <div style="flex: 1; background-image:url('<?php echo asset('images/banner%20images/banner1.jpeg'); ?>'); background-size: cover; background-position: center;"></div>
    </div>
  </div>
  <div class="slider-dots" id="sliderDots">
    <span class="dot active"></span><span class="dot"></span><span class="dot"></span>
  </div>
</section>

<!-- QUICK FEATURES BAR -->
<section class="features-bar">
  <div class="container">
    <div class="features-bar-grid">
      <div class="feature-bar-item">
        <div class="feature-bar-icon"><i class="fas fa-laptop"></i></div>
        <div class="feature-bar-text">
          <h3>Digital Learning</h3>
          <p>ICT-enabled smart classrooms &amp; Digital Library</p>
        </div>
      </div>
      <div class="feature-bar-item">
        <div class="feature-bar-icon"><i class="fas fa-trophy"></i></div>
        <div class="feature-bar-text">
          <h3>Great Potential</h3>
          <p>100% SSC results, Best School Award winner</p>
        </div>
      </div>
      <div class="feature-bar-item">
        <div class="feature-bar-icon"><i class="fas fa-book-open"></i></div>
        <div class="feature-bar-text">
          <h3>Great Learning</h3>
          <p>Holistic education — academics, sports &amp; culture</p>
        </div>
      </div>
      <div class="feature-bar-item">
        <div class="feature-bar-icon"><i class="fas fa-users"></i></div>
        <div class="feature-bar-text">
          <h3>Strong Community</h3>
          <p>Built on trust, care and parent-school partnership</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ABOUT / MISSION SECTION -->
<section class="section">
  <div class="container">
    <div class="about-grid">
      <div class="about-image-wrap reveal">
        <img src="<?php echo asset('images/real/about-img.jpg'); ?>" onerror="this.src='https://images.unsplash.com/photo-1509062522246-3755977927d7?w=700&q=80'" alt="AUBHS School Campus">
        <div class="about-badge"><strong>Est. 1885</strong><span>Years of Excellence</span></div>
      </div>
      <div class="about-content reveal">
        <div class="section-header" style="text-align:left">
          <span class="section-tag">M.C.E. Society's Anglo Urdu Boy's High School &amp; Jr. College</span>
          <h2 class="section-title" style="font-size:36px; line-height:1.3;">The future of the World!<br><span style="display:block; text-align:right; font-size:28px; color:var(--primary); font-weight:600;">is in our classroom today!</span></h2>
          <div class="section-divider" style="margin:0 0 20px"></div>
        </div>
        <blockquote class="mission-quote">
          <i class="fas fa-quote-left"></i>
          <p>"Education is growth! Education is not a preparation for life; Education is life itself."</p>
          <cite>– John Dewey</cite>
        </blockquote>
        <p>The Mission of the school is to provide the right inputs that would lead to the holistic development of the child. The school follows the motto <strong>'Knowledge is Liberation'</strong>. It is the corner-stone around which the character and personality of every child are built.</p>
        <p>Our students come from lower middle-class backgrounds and take advantage of the exceptional facilities and academic support provided by the management, consistently transforming the academic atmosphere year on year.</p>
        <div class="about-points">
          <div class="about-point"><i class="fas fa-check-circle"></i> 100% SSC Board Results</div>
          <div class="about-point"><i class="fas fa-check-circle"></i> Best School Award Winner</div>
          <div class="about-point"><i class="fas fa-check-circle"></i> Digital Library &amp; ICT Labs</div>
          <div class="about-point"><i class="fas fa-check-circle"></i> Experienced Faculty of 81 Teachers</div>
        </div>
        <a href="<?php echo url('about.php'); ?>" class="btn btn-primary"><i class="fas fa-arrow-right"></i> Read Our Story</a>
      </div>
    </div>
  </div>
</section>


<!-- PROGRAMS SECTION -->
<section class="section bg-light">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-tag">What We Teach</span>
      <h2 class="section-title">Our Academic <span>Programs</span></h2>
      <div class="section-divider"></div>
      <p class="section-desc">We offer a comprehensive education covering school to junior college level under the Maharashtra State Board (SSC &amp; HSC).</p>
    </div>
    <div class="programs-grid">
      <div class="program-card reveal">
        <div class="program-card-img">
          <img src="<?php echo url('assets/images/real/Activity-3A.jpg'); ?>" alt="Elementary School">
        </div>
        <div class="program-card-body">
          <span class="prog-badge">Grades 5–7</span>
          <h3>Elementary</h3>
          <p>Building strong foundations in language, mathematics, science and values with activity-based learning.</p>
          <a href="<?php echo url('admission.php'); ?>" class="btn btn-primary">Learn More</a>
        </div>
      </div>
      <div class="program-card reveal">
        <div class="program-card-img">
          <img src="<?php echo url('assets/images/real/Activity-2A.jpg'); ?>" alt="Upper Elementary">
        </div>
        <div class="program-card-body">
          <span class="prog-badge">Grades 8–10 (SSC)</span>
          <h3>Upper Elementary / Junior High</h3>
          <p>Rigorous SSC board preparation with experienced faculty, digital resources and personalised support.</p>
          <a href="<?php echo url('high-school-admission.php'); ?>" class="btn btn-primary">Learn More</a>
        </div>
      </div>
      <div class="program-card reveal">
        <div class="program-card-img">
          <img src="<?php echo url('assets/images/real/Activity-1B-1.jpg'); ?>" alt="Junior College">
        </div>
        <div class="program-card-body">
          <span class="prog-badge">Grades 11–12 (HSC)</span>
          <h3>Junior College (Sixth Form)</h3>
          <p>Science, Commerce and Arts streams with expert faculty and state-of-the-art labs for HSC excellence.</p>
          <a href="<?php echo url('jr-college-admission.php'); ?>" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
    <div style="text-align:center;margin-top:40px">
      <a href="<?php echo url('admission.php'); ?>" class="btn btn-secondary"><i class="fas fa-list"></i> View All Programs</a>
    </div>
  </div>
</section>

<!-- GALLERY PREVIEW -->
<section class="section">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-tag">School Life</span>
      <h2 class="section-title">Photo <span>Gallery</span></h2>
      <div class="section-divider"></div>
      <p class="section-desc">Glimpses of life at AUBHS — prize distributions, tree plantation drives, cultural events, computer labs and more.</p>
    </div>
    <div class="gallery-grid reveal">
      <div class="gallery-item">
        <img src="<?php echo url('assets/images/real/WhatsApp-Image-2020-12-28-at-1.32.11-PM-2-1024x682.jpeg'); ?>" alt="Prize Distribution">
        <div class="gallery-overlay"><i class="fas fa-search-plus"></i><span>Prize Distribution</span></div>
      </div>
      <div class="gallery-item">
        <img src="<?php echo url('assets/images/real/Activity-3A.jpg'); ?>" alt="Tree Plantation">
        <div class="gallery-overlay"><i class="fas fa-search-plus"></i><span>Tree Plantation</span></div>
      </div>
      <div class="gallery-item">
        <img src="<?php echo url('assets/images/real/Activity-1B-1.jpg'); ?>" alt="Computer Lab">
        <div class="gallery-overlay"><i class="fas fa-search-plus"></i><span>ICT Lab</span></div>
      </div>
      <div class="gallery-item">
        <img src="<?php echo url('assets/images/real/Activity-5A-1024x682.jpg'); ?>" alt="School Function">
        <div class="gallery-overlay"><i class="fas fa-search-plus"></i><span>School Function</span></div>
      </div>
      <div class="gallery-item">
        <img src="<?php echo url('assets/images/real/Sports-9B.jpg'); ?>" alt="Sports Day">
        <div class="gallery-overlay"><i class="fas fa-search-plus"></i><span>Sports Day</span></div>
      </div>
      <div class="gallery-item">
        <img src="<?php echo url('assets/images/real/Activity-7B-1024x768.jpg'); ?>" alt="Staff Gathering">
        <div class="gallery-overlay"><i class="fas fa-search-plus"></i><span>Staff &amp; Management</span></div>
      </div>
    </div>
    <div style="text-align:center;margin-top:35px">
      <a href="<?php echo url('gallery.php'); ?>" class="btn btn-primary"><i class="fas fa-images"></i> View Full Gallery</a>
    </div>
  </div>
</section>

<!-- ENQUIRE NOW FORM -->
<section class="section bg-light" id="enquire">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-tag">Get In Touch</span>
      <h2 class="section-title">Enquire <span>Now!</span></h2>
      <div class="section-divider"></div>
      <p class="section-desc">Fill the form below and our team will get back to you within 24 hours.</p>
    </div>
    <div class="admission-form-inner reveal" style="max-width:680px">
      <form id="enquiryForm" class="contact-form-el" method="post" action="<?php echo url('includes/enquiry.php'); ?>">
        <?php if (!empty($_GET['success'])): ?>
          <div class="alert alert-success"><i class="fas fa-check-circle"></i> Thank you! Your enquiry has been submitted. We'll contact you soon.</div>
        <?php endif; ?>
        <div class="form-group">
          <label for="enq_name">Your Name <span style="color:#e74c3c">*</span></label>
          <input type="text" id="enq_name" name="name" class="form-control" placeholder="Enter your full name" required>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="enq_email">Your Email <span style="color:#e74c3c">*</span></label>
            <input type="email" id="enq_email" name="email" class="form-control" placeholder="your@email.com" required>
          </div>
          <div class="form-group">
            <label for="enq_phone">Phone Number</label>
            <input type="tel" id="enq_phone" name="phone" class="form-control" placeholder="+91 XXXXX XXXXX">
          </div>
        </div>
        <div class="form-group">
          <label for="enq_subject">Subject</label>
          <input type="text" id="enq_subject" name="subject" class="form-control" placeholder="e.g. Admission Enquiry for Grade 9">
        </div>
        <div class="form-group">
          <label for="enq_message">Your Message</label>
          <textarea id="enq_message" name="message" class="form-control" placeholder="How can we help you?" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center">
          <i class="fas fa-paper-plane"></i> SEND ENQUIRY
        </button>
      </form>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
