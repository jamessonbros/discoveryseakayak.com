<?php 
/**
 * Template Name: Trip Template
 */

the_post();
?>

<?php get_template_part('templates/page', 'header') ?>

<div class="row">
  <div class="col-sm-7">
    <?php if (has_post_thumbnail()): ?>

      <?php 
      $img_id = get_post_thumbnail_id( get_the_ID() );
      $img_url = wp_get_attachment_image_src($img_id, 'full');
      ?>
      <?php if ($img_url[0]): ?>
      <img src="<?php echo $img_url[0] ?>" class="img-responsive" alt="<?php the_title_attribute() ?>">
      <?php endif ?>

    <?php endif ?>
  </div>
  <div class="col-sm-5">

    <a href="#" class="btn btn-success btn-lg btn-block">Reserve Now &raquo;</a>

    <?php if (get_field('price_per_person')): ?>
    <h2 class="price">Price: $<?php the_field('price_per_person') ?></h2>
    <?php endif ?>

    <?php if (get_field('price_message')): ?>
    <p class="small"><?php the_field('price_message') ?></p>
    <?php endif ?>

    <?php if (get_field('group_discount_message')): ?>
    <p class="small"><?php the_field('group_discount_message') ?></p>
    <?php endif ?>

    <?php if (get_field('trip_duration')): ?>
    <h2><span class="glyphicon glyphicon-dull glyphicon-time"></span> Duration: <?php the_field('trip_duration') ?> <?php the_field('trip_duration_units') ?></h2>
    <?php endif ?>

    <?php if (get_field('trip_dates_message')): ?>
    <h2><span class="glyphicon glyphicon-dull glyphicon-calendar"></span> Dates</h2>
    <p><?php the_field('trip_dates_message') ?>
    <hr>
    <?php endif ?>

  </div>
</div>

<!-- Nav tabs -->
<ul class="nav nav-tabs">

  <li class="active"><a href="#info" data-toggle="tab">Overview</a></li>

  <?php if (get_field('gear_provided')): ?>
    <li><a href="#gear" data-toggle="tab">Gear Provided</a></li>
  <?php endif ?>

  <?php if (get_field('what_to_bring')): ?>
    <li><a href="#bring" data-toggle="tab">What to Bring</a></li>
  <?php endif ?>

  <?php if (get_field('itinerary')): ?>
    <li><a href="#itinerary" data-toggle="tab">Itinerary</a></li>
  <?php endif ?>

  <?php if (get_field('gallery')): ?>
    <li><a href="#photos" data-toggle="tab">Trip Photos</a></li>
  <?php endif ?>

  <?php if (get_field('related_faqs')): ?>
    <li><a href="#faqs" data-toggle="tab">FAQs</a></li>
  <?php endif ?>

  <?php if (get_field('related_testimonials')): ?>
    <li><a href="#testimonials" data-toggle="tab">Testimonials</a></li>
  <?php endif ?>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane fade in active" id="info">
    <h2>General Tour Information</h2>
    <?php the_content() ?>

    <?php $departures = get_field('departures') ?>
    <?php if (count($departures)): ?>
      <h2>Departure Options</h2>
      <div class="row">
      <?php foreach ($departures as $departure): ?>        
        <div class="col-sm-6">
          <h3><span class="glyphicon glyphicon-dull glyphicon-time"></span> <?php echo $departure['time'] ?><?php echo $departure['am_pm'] ?> Departure</h3>
          <?php echo $departure['description'] ?>
        </div>
      <?php endforeach ?>
      </div>

    <?php endif ?>
  </div>
  <!-- /#info -->

  <?php if (get_field('gear_provided')): ?>
    <div class="tab-pane fade" id="gear">
      <h2>Gear Provided</h2>
      <?php the_field('gear_provided') ?>
    </div>
    <!-- /gear -->
  <?php endif ?>

  <?php if (get_field('what_to_bring')): ?>
    <div class="tab-pane fade" id="bring">
      <h2>What to Bring</h2>
      <?php the_field('what_to_bring') ?>
    </div>
    <!-- /bring -->
  <?php endif ?>

  <?php if ($itinerary = get_field('itinerary')): ?>
    <div class="tab-pane fade" id="itinerary">
      <h2>Itinerary</h2>
      <?php the_field('itinerary') ?>
    </div>
    <!-- /itinerary -->
  <?php endif ?>

  <?php $photos = get_field('gallery') ?>
  <?php if (count($photos)): ?>
    <div class="tab-pane fade" id="photos">
      <h2>Trip Photos</h2>
      <div class="row">
        <?php foreach ($photos as $photo): ?>
        <div class="col-xs-12 col-sm-2">
          <div class="gallery-item">
            <a href="<?php echo $photo['url'] ?>">
              <img src="<?php echo $photo['sizes']['thumbnail'] ?>" alt="<?php echo $photo['title'] ?>" class="img-responsive">
            </a>
          </div>
        </div>
        <?php endforeach ?>
      </div>
    </div>
    <!-- /photos -->
  <?php endif ?>


  <?php $faqs = get_field('related_faqs') ?>
  <?php if (count($faqs)): ?>
    <div class="tab-pane fade" id="faqs">
      <h2 title="Frequently Answered Questions">FAQs</h2>
      <?php foreach ($faqs as $faq): ?>
        <h3>
          <?php echo apply_filters('the_title', $faq->post_title) ?>
        </h3>
        <div>
          <?php echo apply_filters('the_content', $faq->post_content) ?>
        </div>
      <?php endforeach ?>
    </div>
  <?php endif ?>

  <?php $quotes = get_field('related_testimonials') ?>
  <?php if (count($quotes)): ?>
    <div class="tab-pane fade" id="testimonials">
      <h2>Customers Say...</h2>
      <?php foreach ($quotes as $quote): ?>
        <?php $meta = get_post_custom($quote->ID) ?>
        <blockquote>
          <?php echo apply_filters('the_content', $quote->post_content) ?>
          <footer>
            &ndash; <?php echo apply_filters('the_title', $quote->post_title) ?>
            <?php if (isset($meta['_byline'][0]) && $meta['_byline'][0]): ?>
              <br>
              <?php echo $meta['_byline'][0] ?>
            <?php endif ?>
          </footer>
        </blockquote>
      <?php endforeach ?>
    </div>
  <?php endif ?>

</div>
<!-- /tab-content -->
