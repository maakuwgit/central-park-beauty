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


<footer class="footer" role="contentinfo">

  <div class="footer__bottom">
    <div class="footer__box">
      <div class="container">


        <div class="footer__content">

          <svg class="icon icon-CP-Logo"><use xlink:href="#icon-CP-Logo"></use></svg>
          <h3><span class="footer__big-title">Central</span><br>
          <span class="footer__small-title">Park Beauty</span></h3>

          <h3>Signup form</h3>

        </div>

        <div class="footer__menu">

          <?php if( $menus ) : ?>

              <?php foreach( $menus as $key => $menu ) : ?>

                <?php if ( $key !== ('primary_navigation')) : ?>

                  <?php $nav_menu = wp_get_nav_menu_object( $menu ); ?>

                  <div class="footer__menu-section">
                      <h6 class="header__menu-heading"><?php echo $nav_menu->name; ?></h6>
                      <?php wp_nav_menu(array('theme_location' => $key, 'menu_class' => 'main-menu')); ?>
                  </div>

                <?php endif; ?>

              <?php endforeach; ?>

            <?php endif; ?>

            <div class="footer__menu-section">
              <h6 class="header__menu-heading">Locate</h6>
              <p><?php echo $street_address; ?><br>
              <?php echo $city; ?>, <?php echo $state; ?> <?php echo $zip ?><br>
              <a href="tel:<?php echo strip_phone($phone_number); ?>"><?php echo $phone_number; ?></a></p>
            </div>


          </div>
        </div>
      </div>


      <div class="row footer__footer">
        <div class="footer__copyright">
          &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.
        </div><!-- .footer__copyright -->

        <div class="footer__social">
          <?php ll_get_social_list(); ?>
        </div><!-- .footer__social -->

        <div class="footer__credits">
          <a href="https://liftedlogic.com/" target="_blank">Web Design in Kansas City</a> by <a href="https://liftedlogic.com/" target="_blank">Lifted Logic</a>
        </div><!-- .footer__credits -->
      </div>
    </div>
  </div><!-- .footer__bottom -->
</footer>
