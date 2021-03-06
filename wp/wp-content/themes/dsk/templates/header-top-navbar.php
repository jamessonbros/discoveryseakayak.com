<header class="banner navbar navbar-inverse navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".top-nav">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <nav class="collapse navbar-collapse top-nav" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
      <div class="navbar-right">
        <ul class="nav navbar-nav">
          <li><a href="tel:<?php echo DSK_PHONE_TOLL_FREE_URL ?>">
            <span class="glyphicon glyphicon-earphone"></span>
            <?php echo DSK_PHONE_TOLL_FREE ?>
          </a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>












<nav class="navbar navbar-default navigation navbar-redwood" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-nav">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img src="/media/logo.png" width="160"></a>
    </div>
      <div class="collapse navbar-collapse main-nav">
        <?php
          if (has_nav_menu('main_navigation')) :
            wp_nav_menu(array('theme_location' => 'main_navigation', 'menu_class' => 'nav navbar-nav navigation-redwood'));
          endif;
        ?>
      </div>
    </nav>
  </div>
</div>
