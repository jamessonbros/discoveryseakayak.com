<?php 
/**
 * Template Name: Guides Template
 */

$guides = get_field('guides');
?>

<?php get_template_part('templates/page', 'header') ?>
<?php get_template_part('templates/content', 'page') ?>

<?php if (count($guides)): ?>
  <div class="guides">
    <?php $i = 0; ?>
    <?php foreach ($guides as $guide): ?>
    <!-- <pre><?php print_r($guide) ?></pre> -->
      <div class="row guide">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 <?php echo $i%2 == 0 ? 'col-sm-push-6 col-md-push-6 col-lg-push-6' : '' ?>">
          <h2 class="guide-name"><?php echo $guide['name'] ?></h2>
          <?php if ($guide['byline']): ?>
            <p class="lead"><?php echo $guide['byline'] ?></p>
          <?php endif ?>
          <div class="guide-text">
            <?php echo $guide['text'] ?>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 <?php echo $i%2 == 0 ? 'col-sm-pull-6 col-md-pull-6 col-lg-pull-6' : '' ?>">
          <img src="<?php echo $guide['image']['sizes']['large'] ?>" class="img-responsive" alt="<?php echo $guide['name'] ?>" title="<?php echo $guide['name'] ?>">
        </div>
      </div>
      <?php if ($i !== count($guides) - 1): ?>
        <?php get_template_part('templates/spacer', 'paddle') ?>
      <?php endif ?>
    <?php $i++; endforeach; ?>
  </div>
  <!-- /row -->
<?php endif ?>