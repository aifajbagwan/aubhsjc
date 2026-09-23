<?php
$base_depth = 0;
$page_title = 'Teaching Staff';
$page_desc  = 'Teaching Staff – AUBHS & Jr. College. Meet our 81 dedicated and experienced faculty members.';
require_once 'includes/header.php';

$school_staff = [
    ['name'=>'Mrs. Parveen Z. Shaikh','subject'=>'Principal','qual'=>'M.A., M.Ed.','img'=>'../assets/images/faculty/Mrs%20Parveen%20Z.%20Shaikh.jpeg'],
    ['name'=>'Mr. Vijay Kulkarni','subject'=>'Mathematics','qual'=>'M.Sc., B.Ed. | 18 yrs exp.','img'=>'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&q=80'],
    ['name'=>'Mrs. Asha Sharma','subject'=>'Science','qual'=>'M.Sc. (Physics), B.Ed. | 15 yrs exp.','img'=>'https://images.unsplash.com/photo-1531123897727-8f129e1688ce?w=400&q=80'],
    ['name'=>'Mr. Rajan Nair','subject'=>'Social Studies','qual'=>'M.A. (History), B.Ed. | 12 yrs exp.','img'=>'https://images.unsplash.com/photo-1552058544-f2b08422138a?w=400&q=80'],
    ['name'=>'Mrs. Priya Mehta','subject'=>'Marathi Language','qual'=>'M.A. (Marathi), B.Ed. | 10 yrs exp.','img'=>'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&q=80'],
    ['name'=>'Mr. Suresh Patil','subject'=>'Hindi Language','qual'=>'M.A. (Hindi), B.Ed. | 14 yrs exp.','img'=>'https://images.unsplash.com/photo-1566492031773-4f4e44671857?w=400&q=80'],
    ['name'=>'Mr. Anil Thakur','subject'=>'Physical Education','qual'=>'M.P.Ed. | 8 yrs exp.','img'=>'https://images.unsplash.com/photo-1527980965255-d3b416303d12?w=400&q=80'],
    ['name'=>'Mrs. Kavita Singh','subject'=>'English Literature','qual'=>'M.A. (English), B.Ed. | 9 yrs exp.','img'=>'https://images.unsplash.com/photo-1544725176-7c40e5a71c5e?w=400&q=80'],
];
$college_staff = [
    ['name'=>'Mr. Deepak Joshi','subject'=>'Physics (HSC)','qual'=>'M.Sc. (Physics) | 20 yrs exp.','img'=>'https://images.unsplash.com/photo-1560179707-f14e90ef3623?w=400&q=80'],
    ['name'=>'Dr. Meena Iyer','subject'=>'Chemistry (HSC)','qual'=>'Ph.D. (Chemistry) | 22 yrs exp.','img'=>'https://images.unsplash.com/photo-1607990281513-2c110a25bd8c?w=400&q=80'],
    ['name'=>'Mr. Kiran Deshmukh','subject'=>'Mathematics (HSC)','qual'=>'M.Sc. (Maths), M.Phil. | 18 yrs exp.','img'=>'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&q=80'],
    ['name'=>'Mrs. Neha Patel','subject'=>'Accountancy (Commerce)','qual'=>'M.Com., B.Ed. | 15 yrs exp.','img'=>'https://images.unsplash.com/photo-1594744803329-e58b31de8bf5?w=400&q=80'],
    ['name'=>'Mr. Ramesh Shetty','subject'=>'Economics','qual'=>'M.A. (Economics) | 13 yrs exp.','img'=>'https://images.unsplash.com/photo-1542178243-bc20204b769f?w=400&q=80'],
    ['name'=>'Mrs. Sonal Gupta','subject'=>'Biology (HSC)','qual'=>'M.Sc. (Biology), B.Ed. | 16 yrs exp.','img'=>'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&q=80'],
    ['name'=>'Mr. Manish Tiwari','subject'=>'English (HSC)','qual'=>'M.A. (English), B.Ed. | 11 yrs exp.','img'=>'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400&q=80'],
    ['name'=>'Mrs. Anita Rao','subject'=>'History & Pol. Science','qual'=>'M.A. (History), B.Ed. | 14 yrs exp.','img'=>'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?w=400&q=80'],
];
?>

<section class="page-hero">
  <div class="container"><div class="page-hero-content">
    <h1>Teaching Staff</h1>
    <nav class="breadcrumb" aria-label="breadcrumb">
      <a href="<?php echo url('index.php'); ?>">Home</a><span class="separator">›</span>
      <a href="<?php echo url('information.php'); ?>">Information</a><span class="separator">›</span>
      <span class="current">Teaching Staff</span>
    </nav>
  </div></div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-tag">Our Educators</span>
      <h2 class="section-title">Meet Our <span>81 Dedicated Teachers</span></h2>
      <div class="section-divider"></div>
      <p class="section-desc">Our team of 81 qualified and experienced educators are the backbone of AUBHS's academic excellence. Each member brings passion, expertise and commitment to every classroom.</p>
    </div>

    <h3 class="staff-section-title" style="border-color:var(--primary)">School Section (SSC) Faculty</h3>
    <div class="staff-grid">
      <?php foreach ($school_staff as $s): ?>
      <div class="staff-card reveal">
        <img class="staff-photo" src="<?php echo $s['img']; ?>" alt="<?php echo htmlspecialchars($s['name']); ?>" loading="lazy"
             onerror="this.src='https://ui-avatars.com/api/?name=<?php echo urlencode($s['name']); ?>&size=400&background=2c8c3c&color=fff'">
        <div class="staff-body">
          <div class="staff-name"><?php echo htmlspecialchars($s['name']); ?></div>
          <div class="staff-subject"><?php echo htmlspecialchars($s['subject']); ?></div>
          <div class="staff-qual"><?php echo htmlspecialchars($s['qual']); ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <h3 class="staff-section-title" style="border-color:var(--secondary);margin-top:50px">Junior College (HSC) Faculty</h3>
    <div class="staff-grid">
      <?php foreach ($college_staff as $s): ?>
      <div class="staff-card reveal">
        <img class="staff-photo" src="<?php echo $s['img']; ?>" alt="<?php echo htmlspecialchars($s['name']); ?>" loading="lazy"
             onerror="this.src='https://ui-avatars.com/api/?name=<?php echo urlencode($s['name']); ?>&size=400&background=f7941d&color=fff'">
        <div class="staff-body">
          <div class="staff-name"><?php echo htmlspecialchars($s['name']); ?></div>
          <div class="staff-subject"><?php echo htmlspecialchars($s['subject']); ?></div>
          <div class="staff-qual"><?php echo htmlspecialchars($s['qual']); ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
