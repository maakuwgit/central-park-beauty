<?php
  $form_id = ( get_field('form_id') ? get_field('form_id') : 1 );

  $map = array(
    'map'       => get_field('map'),
    'address'   => get_field('location_address'),
    'phone'   => get_field('location_phone')
  );

  $bg_img = get_post_thumbnail_id();

  if( $bg_img ) {
    $bg_img_full = wp_get_attachment_image_url($bg_img, 'full');
    $bg_img_lg = wp_get_attachment_image_url($bg_img, 'large');
    $bg_img_md = wp_get_attachment_image_url($bg_img, 'medium');
  }

?>
<article <?php post_class(); ?>>

  <div class="container-full">

    <div class="row stretch">

    <?php if( $bg_img ) : ?>
      <figure class="event__feature col col-md-6of12 col-lg-6of12 col-xl-6of12" data-backgrounder>

        <div class="feature">
          <img alt="" src="<?php echo $bg_img_md; ?>" srcset="<?php echo $bg_img_lg; ?> 2x, <?php echo $bg_img_full; ?> 3x" data-src-md="<?php echo $bg_img_md; ?>" data-src-lg="'<?php echo $bg_img_lg; ?>" data-src-xl="<?php echo $bg_img_full; ?>">
        </div>

      </figure>

      <div class="event__details col col-md-6of12 col-offset-lg-1 col-lg-5of12 col-offset-xl-1 col-xl-5of12">
        Other stuff here
      </div>
    <?php else : ?>

      <div class="event__details">
        Other stuff here too
      </div>

    <?php endif; ?>
    </div>

    <div class="row start">
  <?php if( is_plugin_active( 'gravityforms/gravityforms.php' ) && $map ) : ?>

      <div class="col col-md-6of12 col-lg-6of12 col-xl-6of12">

        <?php gravity_form( $form_id, true, true ); ?>
        <!-- .form-skin -->

      </div>

      <div class="col col-md-6of12 col-lg-6of12 col-xl-6of12">
        <?php
          ll_include_component(
            'location-map',
            $map
          );
        ?>
      </div>

  <?php elseif( is_plugin_active( 'gravityforms/gravityforms.php' ) ) : ?>

      <div class="col">

        <?php gravity_form( $form_id, true, true ); ?>
        <!-- .form-skin -->

      </div>

  <?php elseif( $map ) : ?>

      <div class="col">
        <?php
          ll_include_component(
            'location-map',
            $map
          );
        ?>
      </div>

  <?php endif; ?>

    </div>

</div>
<!-- .container-full -->

</article>