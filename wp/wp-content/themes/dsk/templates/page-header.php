<div class="page-header">
  <h1>
    <?php echo roots_title(); ?>
  </h1>
</div>

<?php if ($hero_image = get_field('hero_image')): ?>
  <div class="hero-image hero-image-<?php echo $post->slug ?>">
    <img src="<?php echo $hero_image['sizes']['hero-image'] ?>" class="img-responsive" alt="<?php echo $hero_image['alt'] ?>" title="<?php echo $hero_image['title'] ?>">
  </div>
<?php endif ?>
