<?php
/**
 * Template Name: Multi-day Index
 */

$trips = get_field('trips');
?>

<?php get_template_part('templates/page', 'header') ?>
<?php get_template_part('templates/content', 'page') ?>

<?php if ($trips): ?>

  <div class="trips row">
    <?php $i = 0; ?>
    <?php foreach ($trips as $trip): $i++; ?>
      <div class="trip col-xs-12 col-sm-6 col-md-3 col-lg-3">
        <?php if ($trip['title']): ?>
          <h2><a href="<?php echo $trip['link'] ?>"><?php echo $trip['title'] ?></a></h2>
        <?php endif ?>
        <?php if ($trip['description']): ?>
          <div class="trip-description">
            <?php echo wpautop($trip['description']) ?>
          </div>
        <?php endif ?>
        <p><a href="<?php echo $trip['link'] ?>" class="btn btn-primary">More info &raquo;</a></p>
      </div>

      <?php if ($i % 2 == 0): ?>
        <div class="clearfix visible-sm"></div>
      <?php endif ?>
    <?php endforeach ?>
  </div>

<?php endif ?>
