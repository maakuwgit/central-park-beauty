<?php
  $phone_number = get_field( 'contact_phone_number', 'option' );
  $street_address = get_field( 'contact_street_address', 'option' );
  $city = get_field( 'contact_city', 'option' );
  $state = get_field( 'contact_state', 'option' );
  $zip = get_field( 'contact_zip', 'option' );
  $openings = get_field( 'scehma_openings', 'option' );
  $consult_tab = get_field( 'consultation_tab', 'option' );
  $schedule_tab = get_field( 'schedule_tab', 'option' );
  $menus = get_nav_menu_locations();
  $service_categories = get_terms('service_category') ?: [];
  $condition_categories = get_terms('condition_category') ?: [];

 ?>

<header class="navbar" role="banner">
  <div class="container-full">

    <div class="navbar-header">

      <div class="side-nav">
        <button type="button" class="navbar-toggle navbar-toggle--stand" data-nav="collapse" data-target="#menu"><span>Menu</span></button><!-- .navbar-toggle -->
      </div>

      <div class="top-nav">
        <div class="header__top-left">
          <ul class="top-left">
            <li><a href="<?php echo esc_url(home_url('/')); ?>"><svg class="icon icon-CP-Logo header__logo"><use xlink:href="#icon-CP-Logo"></use></svg></a></li>
            <li><button type="button" class="navbar-toggle navbar-toggle--stand" data-nav="collapse" data-target="#services"><span>Services</span></button></li>
            <li><button type="button" class="navbar-toggle navbar-toggle--stand" data-nav="collapse" data-target="#conditions"><span>Conditions</span></button></li>
          </ul>
        </div>

        <div class="header__top-right">
          <ul class="top-right">
            <li><button type="button" class="navbar-toggle navbar-toggle--stand" data-nav="collapse" data-target="#location"><svg class="icon icon-cp-location"><use xlink:href="#icon-cp-location"></use></svg> <span class="header__top-right-text">Location</span></button></li>
            <li><button type="button" class="navbar-toggle navbar-toggle--stand" data-nav="collapse" data-target="#consultation"><svg class="icon icon-question"><use xlink:href="#icon-question"></use></svg> <span class="header__top-right-text">Consultation</span></button></li>
            <li><button type="button" class="navbar-toggle navbar-toggle--stand" data-nav="collapse" data-target="#schedule"><svg class="icon icon-pen"><use xlink:href="#icon-pen"></use></svg> <span class="header__top-right-text">Schedule</span></button></li>
            <li><a href="tel:<?php echo strip_phone($phone_number); ?>" class="navbar-toggle navbar-toggle--stand"><svg class="icon icon-smartphone"><use xlink:href="#icon-smartphone"></use></svg> <span class="header__top-right-text"><?php echo $phone_number; ?></span></a></li>
          </ul>
        </div>
      </div>

      <div class="header__right">
        <span class="header__right-text">Central Park Beauty</span>
        <ul>
          <li><a href="#" target="_blank"><svg class="icon icon-cp-twitter"><use xlink:href="#icon-cp-twitter"></use></svg></a></li>
          <li><a href="#" target="_blank"><svg class="icon icon-cp-facebook"><use xlink:href="#icon-cp-facebook"></use></svg></a></li>
          <li><a href="#" target="_blank"><svg class="icon icon-cp-instagram"><use xlink:href="#icon-cp-instagram"></use></svg></a></li>
          <li><a href="#" target="_blank"><svg class="icon icon-cp-snapchat"><use xlink:href="#icon-cp-snapchat"></use></svg></a></li>
          <li><a href="#" target="_blank"><svg class="icon icon-cp-tumblr"><use xlink:href="#icon-cp-tumblr"></use></svg></a></li>
        </ul>
      </div>


      <nav class="primary-nav" id="menu" role="navigation">

        <div class="header__menu-box">

          <div class="header__menu-section" id="logo">
            <svg class="icon icon-CP-Logo header__logo"><use xlink:href="#icon-CP-Logo"></use></svg>
          </div>

          <?php if( $menus ) : ?>

            <?php foreach( $menus as $key => $menu ) : ?>

              <?php if ( $key !== ('primary_navigation')) : ?>

                <?php $nav_menu = wp_get_nav_menu_object( $menu ); ?>

                <div class="header__menu-section">
                    <h6 class="header__menu-heading"><?php echo $nav_menu->name; ?></h6>
                    <?php wp_nav_menu(array('theme_location' => $key, 'menu_class' => 'main-menu')); ?>
                </div>

              <?php endif; ?>

            <?php endforeach; ?>

          <?php endif; ?>

          <div class="header__menu-section">
            <h6 class="header__menu-heading">Locate</h6>
            <p><?php echo $street_address; ?><br>
            <?php echo $city; ?>, <?php echo $state; ?> <?php echo $zip ?><br>
            <a href="tel:<?php echo strip_phone($phone_number); ?>"><?php echo $phone_number; ?></a></p>
          </div>

          <div class="header__menu-section">
            <h6 class="header__menu-heading">Hours</h6>

                <?php if ( $openings ) : ?>

                  <ul class="header__hours">

                  <?php foreach ($openings as $key => $hours) :

                    $days = $hours['days'];
                    $open = $hours['from'];
                    $close = $hours['to'];
                    $closed = $hours['closed'];

                  ?>

                    <li><?php echo implode(", ", $days); ?> <?php if ( $closed ) {
                      echo 'Closed';
                    } else { ?><?php echo $open; ?> - <?php echo $close; ?><?php } ?></li>

                  <?php endforeach ?>

                <?php endif ?>

          </div>

        </div>

      </nav>

      <div class="primary-nav services-nav" id="services">
        <div class="header__menu-box">
          <?php
            foreach ($service_categories as $key => $category) :
              $args_services = [
                'post_type' => 'service',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'service_category' => $category->name
              ];
              $services = get_posts( $args_services ) ?: [];

              if ( $services ) : ?>

                <div class="header__menu-section" id="logo">

                <h6 class="header__menu-heading"><?php echo $category->name; ?></h6>
                <ul>

                  <?php foreach ($services as $key => $service) : ?>

                    <li><a href="<?php echo $service->guid; ?>"><?php echo $service->post_title; ?></a></li>

                  <?php endforeach; ?>

                </ul>
              </div>

              <?php endif; ?>

          <?php endforeach; ?>
        </div>

      </div>

      <div class="primary-nav conditions-nav" id="conditions">
        <div class="header__menu-box">
          <?php
            foreach ($condition_categories as $key => $category) :
              $args_conditions = [
                'post_type' => 'condition',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'condition_category' => $category->name
              ];
              $conditions = get_posts( $args_conditions ) ?: [];

              if ( $conditions ) : ?>

                <div class="header__menu-section" id="logo">

                  <h6 class="header__menu-heading"><?php echo $category->name; ?></h6>
                  <ul>

                    <?php foreach ($conditions as $key => $condition) : ?>

                      <li><a href="<?php echo $condition->guid; ?>"><?php echo $condition->post_title; ?></a></li>

                    <?php endforeach; ?>

                  </ul>
              </div>

              <?php endif; ?>

          <?php endforeach; ?>

          <div class="header__menu-section" id="logo">

            <?php if( $menus ) : ?>

              <?php foreach( $menus as $key => $menu ) : ?>

                <?php if ( $key == ('main_nav_3')) : ?>

                  <?php $nav_menu = wp_get_nav_menu_object( $menu ); ?>

                  <div class="header__menu-section">
                      <h6 class="header__menu-heading"><?php echo $nav_menu->name; ?></h6>
                      <?php wp_nav_menu(array('theme_location' => $key, 'menu_class' => 'main-menu')); ?>
                  </div>

                <?php endif; ?>

              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="primary-nav location-nav text-center" id="location" data-component="gmap">
        <h3 class="hero header__tab-title">Find Us</h3>
        <div class="header__map-container">
          <div id="map" class="gmap"></div>
          <div class="header__map-info">
            <svg class="icon icon-CP-Logo"><use xlink:href="#icon-CP-Logo"></use></svg>
            <div class="header__map-address">
              <p><?php echo $street_address; ?><br>
              <?php echo $city; ?>, <?php echo $state; ?> <?php echo $zip ?><br>
              <a href="tel:<?php echo strip_phone($phone_number); ?>"><?php echo $phone_number; ?></a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="primary-nav consultation-nav text-center" id="consultation">
        <h3 class="hero header__tab-title"><?php echo $consult_tab['title'] ?></h3>
        <div class="header__tab-btn-area">
          <a href="<?php echo $consult_tab['button_1']['url']; ?>" class="header__tab-btn"><?php echo $consult_tab['button_1']['title']; ?></a>
          <a href="<?php echo $consult_tab['button_2']['url']; ?>" class="header__tab-btn"><?php echo $consult_tab['button_2']['title']; ?></a>
        </div>
      </div>

      <div class="primary-nav schedule-nav text-center" id="schedule">
        <h3 class="hero header__tab-title"><?php echo $schedule_tab['title'] ?></h3>
        <div class="header__tab-btn-area">
          <a href="<?php echo $schedule_tab['button_1']['url']; ?>" class="header__tab-btn"><?php echo $schedule_tab['button_1']['title']; ?></a>
          <a href="<?php echo $schedule_tab['button_2']['url']; ?>" class="header__tab-btn"><?php echo $schedule_tab['button_2']['title']; ?></a>
        </div>
      </div>

    </div>

  </div>


</header>
