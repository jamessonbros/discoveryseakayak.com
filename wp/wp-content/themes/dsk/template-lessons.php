<?php
/**
 * Template Name: Lessons Page
 */
$classes = get_field('classes');
$private = get_field('private_instruction');
$paddle = get_field('paddle_clinics');
$pool = get_field('pool_sessions');

$tabs = array();
if ($classes) {
  $tabs['classes'] = array(
    'title' => 'Kayak Classes',
    'content' => $classes
  );
}
if ($private) {
  $tabs['private'] = array(
    'title' => 'Private Instruction',
    'content' => $private,
  );
}
if ($paddle) {
  $tabs['paddle'] = array(
    'title' => 'Paddle Clinics',
    'content' => $paddle,
  );
}
if ($pool) {
  $tabs['pool'] = array(
    'title' => 'Pool Sessions',
    'content' => $pool,
  );
}
?>

<?php get_template_part('templates/page', 'header') ?>
<?php get_template_part('templates/content', 'page') ?>

<?php if (count($tabs)): ?>

  <ul class="nav nav-tabs">
    <?php $i = 0; ?>
    <?php foreach ($tabs as $k => $v): ?>
      <li class="<?php echo $i == 0 ? 'active' : '' ?>">
        <a href="#tab-<?php echo $k ?>" data-toggle="tab">
          <?php echo $v['title'] ?>
        </a>
      </li>
    <?php $i++; endforeach; ?>
  </ul>

  <div class="tab-content">
    <?php $i = 0; ?>
    <?php foreach ($tabs as $k => $v): ?>
      <div class="tab-pane fade <?php echo $i == 0 ? 'in active' : '' ?>" id="tab-<?php echo $k ?>">
        <?php if ($k == 'classes'): ?>
          <h2><?php echo $v['title'] ?></h2>
          <div class="row">
            <?php foreach ($v['content'] as $item): ?>
              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <h3><?php echo $item['title'] ?></h3>
                <p><?php echo $item['text'] ?></p>
              </div>
            <?php endforeach ?>
          </div>
        <?php else: ?>
          <?php echo $v['content'] ?>
        <?php endif ?>
      </div>
    <?php $i++; endforeach; ?>
  </div>
  <!-- /tab-content -->

<?php endif ?>