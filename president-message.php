<?php
$base_depth = 0;
$page_title = 'President\'s Message';
$page_desc  = "President's Message from Dr. P. A. Inamdar – M.C.E. Society's AUBHS & Jr. College";
require_once 'includes/header.php';
?>

<section class="page-hero">
  <div class="container"><div class="page-hero-content">
    <h1>President's Message</h1>
    <nav class="breadcrumb" aria-label="breadcrumb">
      <a href="<?php echo url('index.php'); ?>">Home</a>
      <span class="separator">›</span>
      <span class="current">President's Message</span>
    </nav>
  </div></div>
</section>

<section class="section">
  <div class="container">

    <div class="quote-banner reveal">
      <i class="fas fa-quote-left quote-icon"></i>
      <blockquote>"I AM HAPPY TO NOTE THAT ANGLO BOYS &amp; JR. COLLEGE HAS SHOWN A NOTICEABLE CHANGE FROM TRADITIONAL METHODS AND HAS SHIFTED TO THE COMPUTER, INTERNET &amp; OTHER RELATED TECHNOLOGY-BASED LEARNING &amp; TEACHING."</blockquote>
      <cite>— Dr. P. A. Inamdar, President – M.C.E. Society, Pune</cite>
    </div>

    <div class="message-grid reveal">
      <div class="message-image">
        <div class="message-photo-wrap">
          <img src="<?php echo asset('images/faculty/inamdar-sir.jpg'); ?>"
               alt="Dr. P. A. Inamdar – President, M.C.E. Society">
          <div class="message-name-card">
            <strong>Dr. P. A. Inamdar</strong>
            <span>President – M.C.E. Society, Pune</span>
          </div>
        </div>
      </div>
      <div class="message-content">
        <div class="section-header" style="text-align:left;margin-bottom:25px">
          <span class="section-tag">From the President's Desk</span>
          <h2 class="section-title">President's <span>Message</span></h2>
          <div class="section-divider" style="margin:0 0 20px"></div>
        </div>
        <p>Particularly I am happy to note that the Boys High School has shown a noticeable change since the traditional method of teaching, learning &amp; the administration has shifted to computer, internet &amp; other related technology-based learning &amp; teaching since the last 4 to 5 years.</p>
        <p>The present School Committee &amp; the Principal of Boys High School have shown sincerity and dedication in implementing the Management's dream project. The students who are admitted to this school are from the lower middle class &amp; have taken advantage of the facilities provided by the Management and academic support given by the school, which has changed the Academic atmosphere significantly.</p>
        <p>Every year the standard of education is improving and will continue to do so. I extend my warm wishes to the Chairman, Members of the School Committee, Principal, Staff, Students &amp; Parents of Anglo Urdu Boys High School &amp; Jr. College.</p>
        <div class="message-signature">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/Placeholder.png/220px-Placeholder.png" alt="Signature" style="display:none">
          <p class="sig-name">Dr. P. A. Inamdar</p>
          <p class="sig-title">President – M.C.E. Society, Pune</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
