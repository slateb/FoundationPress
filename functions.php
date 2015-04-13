<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/

/// Add CMB2
if ( file_exists(  __DIR__ . '/library/cmb2/init.php' ) ) {
  require_once  __DIR__ . '/library/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/library/CMB2/init.php' ) ) {
  require_once  __DIR__ . '/library/CMB2/init.php';
}

// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walkers
require_once('library/menu-walker.php');
require_once('library/offcanvas-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add Header image
require_once('library/custom-header.php');

?>
