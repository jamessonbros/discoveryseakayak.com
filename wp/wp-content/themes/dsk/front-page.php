<?php 
the_post();

$columns = get_field('columns');
?>

<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <?php the_content() ?>
  </div>
</div>
<!-- /row -->

<?php if (count($columns)): ?>
  <div class="row home-columns">
    <?php foreach ($columns as $column): ?>
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <?php if ($column['title']): ?>
          <h3><?php echo $column['title'] ?></h3>
        <?php endif ?>
        <div><?php echo $column['body'] ?></div>
      </div>
      <!-- /col -->
    <?php endforeach ?>
  </div>
  <!-- /row -->
<?php endif ?>