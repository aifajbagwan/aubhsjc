<?php
// Site Configuration
define('SITE_NAME', 'AUBHS & Jr. College');
define('SITE_FULL_NAME', "M.C.E. Society's Anglo Urdu Boy's High School & Junior College");
define('SITE_PHONE', '0 800 555 22 11');
define('SITE_PHONE_RAW', '08005552211');
define('SITE_EMAIL', 'info@aubhsjc.com');
define('SITE_ADDRESS', 'Mumbai, Maharashtra, India');
define('SITE_URL', 'http://localhost/aubhsjc');
define('BASE_PATH', '/aubhsjc');

// Determine the root-relative path to assets based on current depth
function asset($path) {
    global $base_depth;
    $prefix = str_repeat('../', $base_depth ?? 0);
    return $prefix . 'assets/' . $path;
}

function url($path = '') {
    global $base_depth;
    $prefix = str_repeat('../', $base_depth ?? 0);
    return $prefix . ltrim($path, '/');
}
?>
