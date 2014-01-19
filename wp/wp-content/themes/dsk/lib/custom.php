<?php
/**
 * Custom functions
 */

// load favicon
add_action('wp_head', 'dsk_load_favicon', 500);
function dsk_load_favicon() {
?>
<link rel="icon" href="/favicon.ico"><link rel="SHORTCUT ICON" href="/favicon.ico">

<?php
}


/**
 * Advanced custom fields
 */
// Include Advanced Custom Fields files
include_once(dirname(__FILE__).'/advanced-custom-fields/acf.php');

// Activate ACF add-ons
add_action('acf/register_fields', 'acfgp_register_fields', 10);
function acfgp_register_fields() {
  include_once(dirname(__FILE__).'/acf-gallery/gallery.php');
}
add_action('acf/register_fields', 'acf_register_repeater_field', 10);
function acf_register_repeater_field() {
  include_once(dirname(__FILE__).'/acf-repeater/repeater.php');
}

// Include theme-specific custom fields
include_once(dirname(__FILE__).'/acf.php');