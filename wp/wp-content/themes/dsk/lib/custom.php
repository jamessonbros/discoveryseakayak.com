<?php
/**
 * Custom functions
 */

// load favicon/apple icons
add_action('wp_head', 'dsk_load_icons');
function dsk_load_icons()
{
  ?>
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/favicon.ico" type="image/x-icon">
  <link rel="SHORTCUT ICON" href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/apple-touch-icon-152x152.png">
  <?php
}


/**
 * Advanced custom fields
 */
// Hide admin interface
// define('ACF_LITE', true);

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