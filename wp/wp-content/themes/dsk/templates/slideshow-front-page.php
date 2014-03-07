<?php 
$slides = get_field('slides');
?>

<div id="carousel-front-page" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <?php for ($i = 0; $i < count($slides); $i++): ?>
      <li data-target="#carousel-front-page" data-slide-to="<?php echo $i ?>" <?php echo $i == 0 ? 'class="active"' : '' ?>></li>
    <?php endfor ?>
  </ol>

  <div class="carousel-inner">
    <?php $i = 0; ?>
    <?php foreach ($slides as $slide): ?>
    <div class="item <?php echo $i == 0 ? 'active' : '' ?>">
      <div class="container">
        <?php if ($slide['link']): ?>
          <a href="<?php echo $slide['link'] ?>">
        <?php endif ?>
          <img src="<?php echo $slide['image']['sizes']['slide'] ?>" alt="<?php echo $slide['image']['alt'] ?>" title="<?php echo $slide['image']['title'] ?>" class="img-responsive">
        <?php if ($slide['link']): ?>
          </a>
        <?php endif ?>
      </div>
    </div>
    <?php $i++; endforeach; ?>
  </div>
  <!-- /carousel-inner -->

  <a href="#carousel-front-page" class="left carousel-control" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a href="#carousel-front-page" class="right carousel-control" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>

</div>