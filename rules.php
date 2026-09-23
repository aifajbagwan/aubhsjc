<?php
$base_depth = 0;
$page_title = 'Rules & Regulations';
$page_desc  = 'Rules & Regulations – AUBHS & Jr. College. School conduct, attendance, uniform and examination rules.';
require_once 'includes/header.php';
?>
<section class="page-hero">
  <div class="container"><div class="page-hero-content">
    <h1>Rules &amp; Regulations</h1>
    <nav class="breadcrumb"><a href="<?php echo url('index.php'); ?>">Home</a><span class="separator">›</span><a href="<?php echo url('information.php'); ?>">Information</a><span class="separator">›</span><span class="current">Rules</span></nav>
  </div></div>
</section>
<section class="section">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-tag">School Conduct</span>
      <h2 class="section-title">Rules &amp; <span>Regulations</span></h2>
      <div class="section-divider"></div>
      <p class="section-desc">Our rules ensure a disciplined, safe and productive learning environment for all students at AUBHS.</p>
    </div>
    <?php
    $rules = [
      ['title'=>'1. Attendance & Punctuality','color'=>'var(--primary)','items'=>[
        'A minimum of 75% attendance is required to appear in board/college examinations.',
        'Students must arrive before the first bell. Late-comers will be marked absent for that period.',
        'Leave applications must be submitted in writing by the parent/guardian in advance.',
        'Medical leave must be supported by a doctor\'s certificate.',
      ]],
      ['title'=>'2. Uniform & Dress Code','color'=>'var(--secondary)','items'=>[
        'All SSC students must wear the prescribed school uniform on all working days.',
        'HSC students must dress neatly and decently. Formal attire is expected.',
        'School ID card must be worn/carried at all times on campus.',
        'No fancy jewellery or accessories while in school uniform.',
      ]],
      ['title'=>'3. Examinations & Tests','color'=>'var(--accent)','items'=>[
        'All students must appear for internal tests, unit tests and term examinations.',
        'Malpractice in examinations will result in strict disciplinary action.',
        'Students failing to maintain minimum 35% marks may not be promoted.',
        'Homework and assignments must be submitted on time.',
      ]],
      ['title'=>'4. Behaviour & Discipline','color'=>'#e74c3c','items'=>[
        'Students must treat teachers, staff and fellow students with respect at all times.',
        'Bullying, ragging and harassment of any kind are strictly prohibited.',
        'Mobile phones are not permitted on campus during school hours.',
        'Damaging school property will result in penalties and disciplinary action.',
      ]],
      ['title'=>'5. Library Rules','color'=>'#8e44ad','items'=>[
        'Maintain complete silence in the library at all times.',
        'Books must be returned within the stipulated period to avoid fines.',
        'Damage to library property or books will attract penalties.',
      ]],
      ['title'=>'6. Laboratory Rules','color'=>'#16a085','items'=>[
        'Enter the laboratory only with teacher\'s permission.',
        'Handle all laboratory equipment with care. Report damage immediately.',
        'Food and drinks are strictly not permitted in the laboratory.',
        'Safety equipment (gloves, goggles) must be worn during practicals.',
      ]],
    ];
    ?>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:25px">
      <?php foreach ($rules as $r): ?>
      <div style="background:#fff;border-radius:12px;padding:28px;box-shadow:0 5px 25px rgba(0,0,0,0.08);border-left:5px solid <?php echo $r['color']; ?>" class="reveal">
        <h3 style="font-size:17px;font-weight:700;color:var(--dark);margin-bottom:15px"><?php echo htmlspecialchars($r['title']); ?></h3>
        <ul style="list-style:none;padding:0">
          <?php foreach ($r['items'] as $item): ?>
          <li style="padding:7px 0;border-bottom:1px solid #eee;font-size:13.5px;display:flex;gap:10px">
            <i class="fas fa-angle-right" style="color:<?php echo $r['color']; ?>;margin-top:3px;min-width:12px"></i>
            <?php echo htmlspecialchars($item); ?>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endforeach; ?>
    </div>
    <div style="background:linear-gradient(135deg,var(--primary-dark),var(--primary));border-radius:12px;padding:40px;color:#fff;text-align:center;margin-top:40px" class="reveal">
      <h3 style="font-family:'Montserrat',sans-serif;font-size:22px;font-weight:800;margin-bottom:15px">Disciplinary Action</h3>
      <p style="opacity:0.9;max-width:700px;margin:0 auto 20px">Violation of school rules may result in: written warning, parent meeting, suspension, or in severe cases, expulsion. The management's decision regarding disciplinary matters will be final.</p>
      <a href="<?php echo url('contacts.php'); ?>" class="btn" style="background:#fff;color:var(--primary);font-weight:700">Contact Principal's Office</a>
    </div>
  </div>
</section>
<?php require_once 'includes/footer.php'; ?>
