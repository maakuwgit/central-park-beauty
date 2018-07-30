<?php
  $phone_number = get_field( 'contact_phone_number', 'option' );
  $street_address = get_field( 'contact_street_address', 'option' );
  $city = get_field( 'contact_city', 'option' );
  $state = get_field( 'contact_state', 'option' );
  $zip = get_field( 'contact_zip', 'option' );
  $openings = get_field( 'scehma_openings', 'option' );
  $consult_tab = get_field( 'consultation_tab', 'option' );
  $schedule_tab = get_field( 'schedule_tab', 'option' );
  $form_id = get_field( 'newsletter_form_id', 'option' );
  $menus = get_nav_menu_locations();
  $service_categories = get_terms('service_category') ?: [];
  $condition_categories = get_terms('condition_category') ?: [];

 ?>


<footer class="footer" role="contentinfo">

  <div class="footer__bottom">
    <div class="footer__box">
      <div class="container">


        <div class="footer__content row centered center">

          <div class="col">
            <svg class="icon icon-CP-Logo">
              <use xlink:href="#icon-CP-Logo"></use>
            </svg>
          </div>

          <h3 class="col">
            <span class="footer__big-title block">Central</span>
            <span class="footer__small-title block">Park Beauty</span>
          </h3>

          <?php if( is_plugin_active( 'gravityforms/gravityforms.php' ) ) : ?>

          <aside class="col">
            <?php gravity_form( $form_id, true, false ); ?>
          </aside>

          <?php endif; ?>

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
              <a href="tel:<?php echo strip_phone($phone_number); ?>"><?php echo format_phone($phone_number, false, '.'); ?></a></p>
            </div>


          </div>
        </div>
      </div>


      <div class="row footer__footer">
        <div class="footer__copyright">
          <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved &reg;.
        </div><!-- .footer__copyright -->

        <div class="footer__credits">
          <a href="https://liftedlogic.com/" target="_blank">Web Design in Kansas City</a> by <a href="https://liftedlogic.com/" target="_blank">Lifted Logic</a>
        </div><!-- .footer__credits -->
      </div>
    </div>
  </div><!-- .footer__bottom -->
</footer>
