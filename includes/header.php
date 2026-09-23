<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo htmlspecialchars($page_desc ?? 'M.C.E. Society\'s Anglo Urdu Boy\'s High School & Junior College – Excellence in Education.'); ?>">
  <title><?php echo htmlspecialchars(($page_title ?? 'Home') . ' – AUBHS & Jr. College'); ?></title>
  <link rel="icon" href="<?php echo asset('images/real/cropped-WhatsApp-Image-2020-12-04-at-12.38.24-PM-1-32x32.jpeg'); ?>">
  <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>



<!-- HEADER -->
<header class="site-header">
  <div class="container">
    <div class="header-inner">
      <a href="<?php echo url('index.php'); ?>" class="site-logo">
        <img src="<?php echo asset('images/real/cropped-WhatsApp-Image-2020-12-04-at-12.38.24-PM-1-192x192.jpeg'); ?>"
             onerror="this.src='<?php echo asset('images/logo-fallback.png'); ?>'"
             alt="AUBHS & Jr. College Logo" width="65" height="65">
        <div class="logo-text">
          <h1>AUBHS &amp; Jr. College</h1>
          <span>M.C.E. Society – Knowledge is Liberation</span>
        </div>
      </a>
      <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle navigation">
        <span></span><span></span><span></span>
      </button>
      <?php include __DIR__ . '/nav.php'; ?>
    </div>
  </div>
</header>
