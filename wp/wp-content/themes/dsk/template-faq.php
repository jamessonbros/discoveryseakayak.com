<?php 
/**
 * Template Name: FAQs Page
 */
?>

<?php get_template_part('templates/page', 'header') ?>
<?php get_template_part('templates/content', 'page') ?>

<?php
$faqs = get_posts(array(
  'post_type' => 'faq',
  'posts_per_page' => -1,
  'orderby' => 'menu_order',
  'order' => 'ASC',
));
?>

<?php if (count($faqs)): ?>
  <?php foreach ($faqs as $faq): ?>
    <h2>
      <span class="qa">Q.</span>
      <?php echo apply_filters('the_title', $faq->post_title) ?>
    </h2>
    <?php echo apply_filters('the_content', $faq->post_content) ?>
    <hr />
  <?php endforeach ?>
<?php endif ?>