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
    <div class="faq" data-faq-id="<?php echo $faq->ID ?>">
      <h2 class="faq-question" id="faq-<?php echo $faq->ID ?>">
        <span class="qa">Q.</span>
        <span class="question-text"><?php echo apply_filters('the_title', $faq->post_title) ?></span>
      </h2>
      <div class="faq-answer">
        <?php echo apply_filters('the_content', $faq->post_content) ?>
      </div>
    </div>
    <hr />
  <?php endforeach ?>
<?php endif ?>